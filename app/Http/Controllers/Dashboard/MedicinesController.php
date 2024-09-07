<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\MedicinesDataTable;
use App\Exports\MedicinesExport;
use App\Exports\MedicinesInvalidRowsFromExcelExport;
use App\Exports\MedicinesRowsFromExcelExport;
use App\Http\Controllers\Controller;
use App\Imports\MedicineImport;
use App\Imports\MedicineImportImport;
use App\Models\Currency;
use App\Models\ICD10;
use App\Models\Medicine;
use App\Models\MedicineActiveIngredient;
use App\Models\MedicineBasedUnitType;
use App\Models\MedicineCategory;
use App\Models\MedicineDosageForm;
use App\Models\MedicineImages;
use App\Models\MedicinePackage;
use App\Models\MedicinePrice;
use App\Models\MedicineRoute;
use App\Models\MedicineSource;
use App\Models\ProviderAccountMedicinePrices;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\HeadingRowImport;
use Illuminate\Support\Str;

class MedicinesController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MedicinesDataTable $dataTable)
    {

        $sources =  MedicineSource::all();
        $cats = MedicineCategory::where('parent_id', 0)->get();
        $types =  MedicineBasedUnitType::all();
        $actives =  MedicineActiveIngredient::all();
        return $dataTable->render('dashboard.medicines.index', [ 'sources' => $sources  , 'cats' => $cats, 'types' => $types, 'actives' => $actives]);
    }

    public function getIcd10(Request $request)
    {

        $icd10s = ICD10::pluck('description', 'id')
            ->map(function ($text, $id) {
                return (object) ['text' => $text, 'id' => $id];
            })
            ->toArray();

        $data = array_values($icd10s);

        return $data;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types =  MedicineBasedUnitType::all();
        $actives =  MedicineActiveIngredient::all();

        $icd10s = ICD10::all();
        $routes = MedicineRoute::all();
        $packages= MedicinePackage::all();
        $dosage_forms = MedicineDosageForm::all();

        return view('dashboard.medicines.create_edit', compact('icd10s' ,'types', 'actives','routes' ,'packages' ,'dosage_forms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validateMedicines($request);
        $medicine = Medicine::create(array_merge($request->except(['_token', '_method', 'new_price'])));
        $medicine->name = $request->medicine_name_en;
        $medicine->save();

        if (!empty($request->icd10)) {
            $medicine->icd10s()->sync($request->icd10);
        }

        if( !empty( $request->images ) ){
            foreach ($request->images  as $key => $image ) {
                $hashedName = $image->hashName();
                $imgPath = Storage::disk('uploads')->putFileAs('medicine_images', $image, $hashedName);
                MedicineImages::create([
                    'file' => env('APP_URL')."uploads/" . $imgPath ,
                    'medicine_id' =>  $medicine->id
                ]);
            }
        }   

        if (!empty($request->Ingredients)) {
            //$medicine->ActiveIngredients->sync($request->Ingredients);
            foreach ($request->Ingredients as $key => $value) {
                DB::table('medicine_medicine_active_ingredient')->insertGetId([
                    'medicine_id' =>  $medicine->id,
                    'medicine_active_ingredient_id' => $value,
                ]);
            }
        }

        if ($request->new_price) {
            MedicinePrice::create([
                'medicine_id' => $medicine->id,
                'price' => $request->new_price,
                'start_date' => now(),
                'status' => 'published',
            ]);
        }
        alert()->success(__('Success'), __('Create Successfully'));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $types =  MedicineBasedUnitType::all();
        $actives =  MedicineActiveIngredient::all();
      
        $icd10s = ICD10::all();
        $routes = MedicineRoute::all();
        $packages= MedicinePackage::all();
        $dosage_forms = MedicineDosageForm::all();

        return view('dashboard.medicines.create_edit', compact( 'icd10s' , 'medicine', 'types', 'actives' ,'routes' ,'packages' ,'dosage_forms' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
        $this->validateMedicines($request);
        $medicine->update(array_merge($request->except(['_token', '_method', 'new_price'])));

        $medicine->name = $request->medicine_name_en;
        $medicine->save();

        DB::table('medicine_medicine_active_ingredient')
            ->where('medicine_id', $medicine->id)
            ->delete();

        if (!empty($request->icd10)) {
            $medicine->icd10s()->sync($request->icd10);
        }
        MedicineImages::where('medicine_id' ,   $medicine->id )->delete();
        if( !empty( $request->images ) ){
            foreach ($request->images  as $key => $image ) {
                $hashedName = $image->hashName();
                $imgPath = Storage::disk('uploads')->putFileAs('medicine_images', $image, $hashedName);
                MedicineImages::create([
                    'file' => env('APP_URL')."uploads/" . $imgPath ,
                    'medicine_id' =>  $medicine->id
                ]);
            }
        }    

        if (!empty($request->Ingredients)) {
            //$medicine->ActiveIngredients->sync($request->Ingredients);
            foreach ($request->Ingredients as $key => $value) {
                DB::table('medicine_medicine_active_ingredient')->insertGetId([
                    'medicine_id' =>  $medicine->id,
                    'medicine_active_ingredient_id' => $value,
                ]);
            }
        }
        if ($request->new_price) {
            MedicinePrice::where('medicine_id', $medicine->id)->whereNull('end_date')->update(['end_date' => now()]);
            MedicinePrice::create([
                'medicine_id' => $medicine->id,
                'price' => $request->new_price,
                'start_date' => now(),
                'status' => 'published',
            ]);

            ProviderAccountMedicinePrices::where( 'medicine_id' , $medicine->id )
            ->where('price' , $request->new_price )->delete() ;


        }
        alert()->success(__('Success'), __('Update Successfully'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $medicine = Medicine::withTrashed()->findOrFail($id);
        if (!$medicine->default) {
            if ($medicine->deleted_at) {
                $medicine->forceDelete();
            } else {
                $medicine->delete();
            }
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false, 'message' => __('can\'t delete default')]);
    }

    public function validateMedicines($request)
    {
        $valid = [
          'images' => 'nullable|array',
          'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ];
        if ($request->medicine) {
            //$valid['title']=['required',Rule::unique('medicines','title')->whereNull('deleted_at')->ignore($request->medicine->id,'id')];
        } else {
            //$valid['title']='required';
        }
        return $request->validate($valid);
    }

    public function changeCat(Request $request)
    {
        $count = Medicine::whereIn('id', $request->IDS)->update(['deleted_by' => auth()->id(), 'medicine_category_id' => $request->cat_id]);
        return response()->json(['success' => true, 'message' => __('Updated :count Successful', ['count' => $count])]);
    }
    public function changeCatAndActive(Request $request)
    {

        if (isset($request->cat_id) && !empty($request->cat_id)) {
            $count = Medicine::whereIn('id', $request->IDS)->update(['updated_by' => auth()->id(), 'medicine_category_id' => $request->cat_id]);
        }
        if (isset($request->source_id) && !empty($request->source_id)) {
           // dd($request->source_id , $request->IDS);
            $count = Medicine::whereIn('id', $request->IDS)->update(['updated_by' => auth()->id(), 'medicine_source_id' => $request->source_id]);
        }
        if (isset($request->medicine_sources_type_id) && !empty($request->medicine_sources_type_id)) {
            $count = Medicine::whereIn('id', $request->IDS)->update(['updated_by' => auth()->id(), 'medicine_sources_type_id' => $request->medicine_sources_type_id]);
        }

        if (isset($request->actives) && !empty($request->actives)) {
            DB::table('medicine_medicine_active_ingredient')
                ->whereIn('medicine_id',  $request->IDS)
                ->delete();
            foreach ($request->IDS as $key => $medicine_id) {
                foreach ($request->actives as $key => $active_id) {
                    DB::table('medicine_medicine_active_ingredient')->insertGetId([
                        'medicine_id' =>  $medicine_id,
                        'medicine_active_ingredient_id' => $active_id,
                    ]);
                }
            }
        }
        if (isset($request->icd10) && !empty($request->icd10)) {
            DB::table('medicines_icd10')
                ->whereIn('medicine_id',  $request->IDS )
                ->delete();
            foreach ($request->IDS as $key => $medicine_id) {
                foreach ($request->icd10 as $key => $active_id) {
                    DB::table('medicines_icd10')->insertGetId([
                        'medicine_id' =>  $medicine_id,
                        'icd10_id' => $active_id,
                    ]);
                }
            }
        }


        return response()->json(['success' => true, 'message' => __('Updated :count Successful', ['count' => " "])]);
    }
    public function deleteMulti(Request $request)
    {
        $count = Medicine::whereIn('id', $request->IDS)->update(['deleted_by' => auth()->id(), 'deleted_at' => now()]);
        return response()->json(['success' => true, 'message' => __('Delete :count Successful', ['count' => $count])]);
    }
    public function export(Request $request)
    {
        switch ($request->export_type) {
            case 'csv':
                return Excel::download(new MedicinesExport, 'medicines_' . time() . '.csv', \Maatwebsite\Excel\Excel::CSV);
                break;
            case 'excel':
                return Excel::download(new MedicinesExport, 'medicines_' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
                break;
            case 'pdf':
                $medicines = Medicine::query();
                if (request('IDS')) {
                    $medicines = $medicines->whereIn('id', explode(',', request('IDS')));
                }
                $medicines = $medicines->get();
                return Pdf::loadView('dashboard.medicines.export_pdf', ['medicines' => $medicines])->download('medicines_' . time() . '.pdf');
                break;
        }
    }


    public function uploadFile($file)
    {
        $folder_name = 'medicines';
        $path = '/img/' . $folder_name . '/' . date('Y/m/d') . '/';
        if (!file_exists(public_path() . $path)) {
            File::makeDirectory(public_path() . $path, $mode = 0777, true, true);
        }
        $namefile = $folder_name . '_' . rand(0000, 9999) . '_' . time();
        $ext = $file->getClientOriginalExtension();
        //file old name
        $old_name = $file->getClientOriginalName();
        $mastername = $namefile . '.' . $ext;
        $file_size = $file->getSize();
        $file_info = $file->getFileInfo();
        $mimtype = $file->getMimeType();
        $file->move(public_path($path), $mastername);
        return [
            'file_dir' => $path,
            'file_name' => $mastername,
            'file_old_name' => $old_name,
            'file_size' => $file_size,
            'file_info' => $file_info,
            'file_ext' => $ext,
            'file_mimtype' => $mimtype,
        ];
    }


    public function import(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,txt,xlsx,xls,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet|max:' . return_bytes(ini_get('upload_max_filesize')),
        ]);
        Session::put('inserted',  false);
        DB::table('medicines_import')->where('created_by', auth()->id())->delete();
        DB::table('medicines_import_invalid_rows')->where('created_by', auth()->id())->delete();

        //  $medicine=Medicine::first();
        // return response()->json(['success'=>true,'message'=>__('Success upload file will redirect ...'),'redirect_url'=>route('medicines.import_match_columns')]);
        //        dd($request->file('file')->getMimeType());
        if ($validator->fails()) {
            $messages = '';
            foreach ($validator->errors()->all() as $error) {
                $messages .= $error . ' ';
            }
            return response()->json(['success' => false, 'message' => $messages]);
        } else {
            $file = $request->file('file');
            $fileDataArray = $this->uploadFile($file);
            $headings = (new HeadingRowImport)->toArray(public_path($fileDataArray['file_dir'] . $fileDataArray['file_name'])); // set csv path here or
            // dd(   $headings );

            $match_columns = $headings[0][0];
            Session::put('fileColumns',  $match_columns);
            Session::put('fileDataArray', json_encode($fileDataArray));
            // session('fileColumns', $headings);

            //   $medicine=Medicine::create(array_merge($fileDataArray,['table_name'=>'medicines','generated_table_name'=>'medicines_'.Str::random(12),'match_columns'=>$match_columns]));
            return response()->json(['success' => true, 'message' => __('Success upload file will redirect ...'), 'redirect_url' => route('medicines.import_match_columns')]);
        }
    }
    public function matchColumns(Request $request)
    {
        if (Session::get('inserted') == true) {
            return back();
        }
        $fileColumns =   Session::get('fileColumns');
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();
        if (file_exists(resource_path('views/dashboard/medicines/match_import.blade.php'))) {
            $tableColumns = [
                'Medicine ID' => 'med_id',
                'Medicine Name en' => 'name',
                'Medicine Name ar' => 'name_ar',
                'Gross Price' => 'price',
                'Effective Date' => 'effective_date',

                'International Barcode' => 'international_barcode',
                'Pharmacy Barcode' => 'pharmacy_barcode',
                'Company' => 'company',
                'Medicine Route' => 'medicine_route_id',
                'Chapter' => 'chapter',
                'Mechanism Of Action' => 'mechanism_of_action',
                'Recommended Dose' => 'recommended_dose',
                'Medicine Dosage Form' => 'medicine_dosage_form_id',
                'Concentration' => 'concentration',
                'Medicine Package' => 'medicine_package_id',
                'Package Unit' => 'package_unit',
                'Maximum Dose' => 'maximum_dose',
                'Maximum Duration' => 'maximum_duration',
                'Uses' => 'uses',
                'Side Effects' => 'side_effects',
                'Drug' => 'drug',
                'Type Of Interaction' => 'type_of_interaction',
                'Alternative' => 'alternative',
                'Age Group' => 'age_group',
                'Gender' => 'gender',
                'Recurrence Period' => 'recurrence_period',
                'Related Diagnosis' => 'related_diagnosis',
                'Contraindication Case' => 'contraindication_case',
                'Contraindication Precautions' => 'contraindication_precautions',
                'Insurance Coverage' => 'insurance_coverage',

            ];
            $compact = compact('fileColumns', 'tableColumns');
            Session::put('medicine_progress', 0);
            // dd(  Session::get('fileColumns') );   
            return view('dashboard.medicines.match_import', $compact);
        }
    }
    public function matchColumnsUpdate(Request $request)
    {
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();
        Session::put('inserted',  true);
        Session::put('fails_rows_array_with_errors', null);
        $newArray = [];
        // return response()->json(  );
        foreach (json_decode($request->columns)  as $key => $value) {
            if ($value) {
                $newArray[strtolower($key)] = strtolower($value);
            }
        }
        $file = json_decode(Session::get('fileDataArray'));
        // dd( $file->file_dir );
        Session::put('medicine_progress', 0);
        $msg =   Excel::import(new MedicineImport($newArray),  public_path($file->file_dir . $file->file_name));

        return response()->json(['success' => true, 'message' => __('Success upload file will redirect ...'), 'redirect_url' => route('medicines.import_match_columns')]);

        if (!empty(Session::get('date_error')) && Session::get('date_error') === 1) {
            Session::put('date_error',  0);
            // return redirect()->route('medicines.index')->with('msg', ' date format must be like d/m/y ');
        }

        return response()->json(['success' => true, 'message' => __('Success upload file will redirect ...'), 'redirect_url' => url('medicines.getImportedData')]);
    }


    public function checkProgress()
    {
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())
            ->orderBy('id', 'desc')
            ->first()->count ?? 0;
        return response()->json(['progress' => $progress]);
    }

    public function getImportedData()
    {
        $progress = DB::table('progress_bar_count')->where('user_id', auth()->id())->delete();
        $full_dublicated_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 0)
            ->paginate();

        $changed_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 1)
            ->paginate();

        $new_medicines = DB::table('medicines_import')->where('created_by', auth()->id())->where('is_new', 1)->paginate();
        if (!empty(Session::get('fails_rows_array_with_errors'))) {
            $fails_rows_array_with_errors =   Session::get('fails_rows_array_with_errors');
        } else {
            $fails_rows_array_with_errors =  [];
        }

        return view('dashboard.medicines.mapping_data', compact('changed_medicines', 'full_dublicated_medicines', 'new_medicines', 'fails_rows_array_with_errors'));
    }

    public function exportInvalidRows()
    {
        $medicines = DB::table('medicines_import_invalid_rows')->where('created_by', auth()->id())->get();
        $export = new MedicinesInvalidRowsFromExcelExport($medicines);
        $medicines = DB::table('medicines_import_invalid_rows')->where('created_by', auth()->id())->delete();
        return Excel::download($export, 'medicines_invalid' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }


    public function exportFullDuplicate()
    {
        $full_dublicated_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 0)
            ->get();
        $export = new MedicinesRowsFromExcelExport($full_dublicated_medicines);
        return Excel::download($export, 'medicines_data' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function exportWithSomeChanges()
    {
        $changed_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 1)
            ->get();
        $export = new MedicinesRowsFromExcelExport($changed_medicines);
        return Excel::download($export, 'medicines_data' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }
    public function exportNewData()
    {
        $new_medicines = DB::table('medicines_import')->where('created_by', auth()->id())->where('is_new', 1)->get();
        $export = new MedicinesRowsFromExcelExport($new_medicines);
        return Excel::download($export, 'medicines_data' . time() . '.xlsx', \Maatwebsite\Excel\Excel::XLSX);
    }

    public function updateFullDuplicate()
    {
        $full_dublicated_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 0)
            ->get();
        foreach ($full_dublicated_medicines as $row) {

            $medicine =  Medicine::where('med_id', $row->med_id)->first();
            if ($medicine) {
                $medicine->update([
                    'med_id' => $row->med_id
                ]);
            }
        }
        return back()->with('message', 'Updated Successfully');
    }
    public function updateWithSomeChanges()
    {
        $changed_medicines = DB::table('medicines_import')->where('created_by', auth()->id())
            ->where('is_new', 0)
            ->where('has_changes', 1)
            ->get();

        foreach ($changed_medicines as $row) {
            $medicine =  Medicine::where('med_id', $row->med_id)->first();
            if ($medicine) {
                $medicine->update([
                    'med_id' =>  $row->med_id,
                    'name' => $row->name,
                    'medicine_name_en' => $row->name,
                    'medicine_name_ar' => $row->name_ar,
                    'effective_date' =>  $row->effective_date,
                    'international_barcode' =>  $row->international_barcode,
                    'pharmacy_barcode' =>  $row->pharmacy_barcode,
                    'company' =>  $row->company,
                    'medicine_route_id' =>  $row->medicine_route_id,
                    'chapter' =>  $row->chapter,
                    'mechanism_of_action' =>  $row->mechanism_of_action,
                    'recommended_dose' =>  $row->recommended_dose,
                    'medicine_dosage_form_id' =>  $row->medicine_dosage_form_id,
                    'concentration' =>  $row->concentration,
                    'medicine_package_id' =>  $row->medicine_package_id,
                    'package_unit' =>  $row->package_unit,
                    'maximum_dose' =>  $row->maximum_dose,
                    'maximum_duration' =>  $row->maximum_duration,
                    'uses' =>  $row->uses,
                    'side_effects' =>  $row->side_effects,
                    'drug' =>  $row->drug,
                    'type_of_interaction' =>  $row->type_of_interaction,
                    'alternative' =>  $row->alternative,
                    'age_group' =>  $row->age_group,
                    'gender' =>  $row->gender,
                    'recurrence_period' =>  $row->recurrence_period,
                    'related_diagnosis' =>  $row->related_diagnosis,
                    'contraindication_case' =>  $row->contraindication_case,
                    'contraindication_precautions' =>  $row->contraindication_precautions,
                    'insurance_coverage' =>  $row->insurance_coverage,
                ]);
                if ($row->price) {
                    MedicinePrice::where('medicine_id', $medicine->id)->whereNull('end_date')->update(['end_date' => now()]);
                    MedicinePrice::create([
                        'medicine_id' => $medicine->id,
                        'price' => $row->price,
                        'start_date' => now(),
                        'status' => 'published',
                    ]);
                }
            }
        }
        return back()->with('message', 'Updated Successfully');
    }
    public function insertNewData()
    {



        $new_medicines = DB::table('medicines_import')->where('created_by', auth()->id())->where('is_new', 1)->take(2000)->get();

        foreach ($new_medicines as $row) {

            $medicine = Medicine::create([
                    'med_id' =>  $row->med_id,
                    'name' => $row->name,
                    'medicine_name_en' => $row->name,
                    'medicine_name_ar' => $row->name_ar,
                    'effective_date' =>  $row->effective_date,
                    'international_barcode' =>  $row->international_barcode,
                    'pharmacy_barcode' =>  $row->pharmacy_barcode,
                    'company' =>  $row->company,
                    'medicine_route_id' =>  $row->medicine_route_id,
                    'chapter' =>  $row->chapter,
                    'mechanism_of_action' =>  $row->mechanism_of_action,
                    'recommended_dose' =>  $row->recommended_dose,
                    'medicine_dosage_form_id' =>  $row->medicine_dosage_form_id,
                    'concentration' =>  $row->concentration,
                    'medicine_package_id' =>  $row->medicine_package_id,
                    'package_unit' =>  $row->package_unit,
                    'maximum_dose' =>  $row->maximum_dose,
                    'maximum_duration' =>  $row->maximum_duration,
                    'uses' =>  $row->uses,
                    'side_effects' =>  $row->side_effects,
                    'drug' =>  $row->drug,
                    'type_of_interaction' =>  $row->type_of_interaction,
                    'alternative' =>  $row->alternative,
                    'age_group' =>  $row->age_group,
                    'gender' =>  $row->gender,
                    'recurrence_period' =>  $row->recurrence_period,
                    'related_diagnosis' =>  $row->related_diagnosis,
                    'contraindication_case' =>  $row->contraindication_case,
                    'contraindication_precautions' =>  $row->contraindication_precautions,
                    'insurance_coverage' =>  $row->insurance_coverage,
                ]);
                if ($row->price) {
                    MedicinePrice::create([
                        'medicine_id' => $medicine->id,
                        'price' => $row->price,
                        'start_date' => now(),
                        'status' => 'published',
                    ]);
                }
            
        }


        $new_medicines = DB::table('medicines_import')->where('created_by', auth()->id())->where('is_new', 1)->take(2000)->delete();

        return back()->with('message', 'Inserted Successfully');
    }
}
