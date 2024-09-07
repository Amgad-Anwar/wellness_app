<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\MedicineCategoriesDataTable;
use App\Exports\MedicineCategoriesExport;
use App\Http\Controllers\Controller;
use App\Models\MedicineCategory;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class MedicineCategoriesController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MedicineCategoriesDataTable $dataTable){
        return $dataTable->render('dashboard.medicine_categories.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.medicine_categories.create_edit');
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
        $this->validateMedicineCategories($request);
        $imageAttr=[];
        if($request->file('icon')){
            $imageAttr=array_merge($imageAttr,uploadImage($request->file('icon'),'medicine_categories','icon','icon'));
        }
        MedicineCategory::create(array_merge($request->only(['parent_id','title','title_ar','description']),$imageAttr));
        alert()->success(__('Success'),__('Create Successfully'));
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
    public function edit(MedicineCategory $medicine_category)
    {
        //
        return view('dashboard.medicine_categories.create_edit',compact('medicine_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineCategory $medicine_category)
    {
        //
        $this->validateMedicineCategories($request);
        $array=[];
        $imageAttr=[];
        if($request->file('image')){
            $imageAttr=uploadImage($request->file('image'),'medicine_categories','image','image');
        }
        if($request->file('icon')){
            $imageAttr=array_merge($imageAttr,uploadImage($request->file('icon'),'medicine_categories','icon','icon'));
        }
        $medicine_category->update(array_merge($request->only(['parent_id','title','title_ar','code','description']),$imageAttr));
        alert()->success(__('Success'),__('Update Successfully'));
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
        $medicine_category=MedicineCategory::withTrashed()->findOrFail($id);
        if(!$medicine_category->default){
            if($medicine_category->deleted_at){
                $medicine_category->forceDelete();
            }else{
                $medicine_category->delete();
            }
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>false,'message'=>__('can\'t delete default')]);
    }

    public function validateMedicineCategories($request){
        $valid=[
        ];
        if($request->medicine_category){
            $valid['title']=['required',Rule::unique('medicine_categories','title')->whereNull('deleted_at')->ignore($request->medicine_category->id,'id')];
        }else{
            $valid['title']='required';
        }
        return $request->validate($valid);
    }
    public function deleteMulti(Request $request){
        $count=MedicineCategory::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new MedicineCategoriesExport,'medicine_categories_'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new MedicineCategoriesExport,'medicine_categories_'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $medicine_categories=MedicineCategory::query();
                if(request('IDS')){
                    $medicine_categories=$medicine_categories->whereIn('id',explode(',',request('IDS')));
                }
                $medicine_categories=$medicine_categories->get();
                return Pdf::loadView('dashboard.medicine_categories.export_pdf',['medicine_categories'=>$medicine_categories])->download('medicine_categories_'.time().'.pdf');
                break;
        }
    }
}
