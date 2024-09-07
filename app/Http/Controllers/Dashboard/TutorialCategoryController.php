<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\AdvertisingDataTable;
use App\DataTables\AdvertisingsDataTable;
use App\DataTables\AmgadDataTable;
use App\DataTables\MedicineBasedUnitTypeDataTable;
use App\DataTables\ProviderServicesDataTable;
use App\DataTables\TutorailCategoryDataTable;
use App\Exports\AdvertisingExport;
use App\Exports\TutorailCategoryExport;
use App\Exports\TutprailCategoryExport;
use App\Http\Controllers\Controller;
use App\Models\Advertising;
use App\Models\Currency;
use App\Models\ProviderService;
use App\Models\TutorailCategory;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class TutorialCategoryController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( TutorailCategoryDataTable $dataTable){

        return $dataTable->render('dashboard.tutorial_category.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tutorial_category.create_edit');
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
        $this->validateProviderServices($request);
        $array = [] ;
        $array['created_by'] = auth()->id() ;
 
        TutorailCategory::create(array_merge($request->only(['title','description']) , $array ) );
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
    public function edit(TutorailCategory $tutorial_category)
    {
        //
        return view('dashboard.tutorial_category.create_edit',compact('tutorial_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TutorailCategory $tutorial_category)
    {
        //
        $this->validateProviderServices($request);
        $array = [] ;
        $array['updated_by'] = auth()->id() ;
        $tutorial_category->update(array_merge($request->only(['title','description']) , $array ) );
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
        $tutorial_category=TutorailCategory::withTrashed()->findOrFail($id);
            if($tutorial_category->deleted_at){
                $tutorial_category->forceDelete();
            }else{
                $tutorial_category->deleted_by = auth()->id() ;
                $tutorial_category->delete();
            }
            return response()->json(['success'=>true]);
        return response()->json(['success'=>false,'message'=>__('can\'t delete default')]);
    }

    public function validateProviderServices($request){
        $valid=[
        ];
      
            $valid['title']='required|max:255';
            $valid['description']='required';
        
        return $request->validate($valid);
    }
    public function deleteMulti(Request $request){
        $count=TutorailCategory::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new TutorailCategoryExport,'tutorial_category'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new TutorailCategoryExport,'tutorial_category'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $tutorial_category=TutorailCategory::query();
              
                if(request('IDS')){
                    $tutorial_category=$tutorial_category->whereIn('id',explode(',',request('IDS')));
                }
                $tutorial_category=$tutorial_category->get();
                return Pdf::loadView('dashboard.tutorial_category.export_pdf',['tutorial_category'=>$tutorial_category])->download('tutorial_category'.time().'.pdf');
                break;
        }
    }
}
