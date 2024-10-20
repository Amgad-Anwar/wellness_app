<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\MealsDataTable;
use App\DataTables\MedicinesDataTable;
use App\DataTables\PackagePriceDataTable;
use App\Exports\MedicinesExport;
use App\Exports\MedicinesInvalidRowsFromExcelExport;
use App\Exports\MedicinesRowsFromExcelExport;
use App\Http\Controllers\Controller;
use App\Imports\MedicineImport;
use App\Imports\MedicineImportImport;
use App\Models\Currency;
use App\Models\ICD10;
use App\Models\Meal;
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
use App\Models\PackagePrice;
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

class PackagePricesController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PackagePriceDataTable $dataTable)
    {
        return $dataTable->render('dashboard.package_prices.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.package_prices.create_edit');
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
        $days = '[]' ;
        if (!empty($request->off_days)) {
            $days = json_encode($request->off_days);
        }
        $medicine = PackagePrice::create([
            'days_number' => $request->days_number ,
            'price' => $request->price ,
            'package_id' => $request->package_id ,
            'off_days' => $days ,

        ]);


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
    public function edit($id)
    { 
        $medicine = PackagePrice::findOrFail($id);
        return view('dashboard.package_prices.create_edit' , compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicine = PackagePrice::findOrFail($id);
        $this->validateMedicines($request);
        $days = '[]' ;
        if (!empty($request->off_days)) {
            $days = json_encode($request->off_days);
        }


        $medicine->update([
            'days_number' => $request->days_number ,
            'price' => $request->price ,
            'package_id' => $request->package_id ,
            'off_days' => $days ,
        ]);



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
        $medicine = PackagePrice::withTrashed()->findOrFail($id);
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
          'image' => 'image'
        ];
        if ($request->medicine) {
        } else {
        }
        return $request->validate($valid);
    }


    public function deleteMulti(Request $request)
    {
        $count = PackagePrice::whereIn('id', $request->IDS)->update(['deleted_by' => auth()->id(), 'deleted_at' => now()]);
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
                $medicines = PackagePrice::query();
                if (request('IDS')) {
                    $medicines = $medicines->whereIn('id', explode(',', request('IDS')));
                }
                $medicines = $medicines->get();
                return Pdf::loadView('dashboard.package_prices.export_pdf', ['medicines' => $medicines])->download('medicines_' . time() . '.pdf');
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




}
