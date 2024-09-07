<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\CitiesDataTable;
use App\Exports\CitiesExport;
use App\Http\Controllers\Controller;
use App\Models\City;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class CitiesController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CitiesDataTable $dataTable){
        return $dataTable->render('dashboard.cities.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.cities.create_edit');
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
        $this->validateCities($request);
        $city=City::create(array_merge($request->except(['_token','_method'])));
        $city->is_active =  $request->is_active ? 1 : 0  ;
        $city->save() ;
        if($request->default){
            City::where('id','!=',$city->id)->update(['default'=>0]);
        }
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
    public function edit(City $city)
    {
        //
        return view('dashboard.cities.create_edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        //
        $this->validateCities($request);
        $city->update(array_merge($request->except(['_token','_method'])));
        $city->is_active =  $request->is_active ? 1 : 0  ;
        $city->save() ;
        if($request->default){
            City::where('id','!=',$city->id)->update(['default'=>0]);
        }
        alert()->success(__('Success'),__('Update Successfully'));
        return redirect()->route('cities.index');
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
        $city=City::withTrashed()->findOrFail($id);
        if(!$city->default){
            if($city->deleted_at){
                $city->forceDelete();
            }else{
                $city->delete();
            }
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>false,'message'=>__('can\'t delete default')]);
    }

    public function validateCities($request){
        $valid=[
        ];
        if($request->city){
            $valid['name']=['required',Rule::unique('cities','name')->whereNull('deleted_at')->ignore($request->city->id,'id')];
        }else{
            $valid['name']='required';
        }
        return $request->validate($valid);
    }
    public function deleteMulti(Request $request){
        $count=City::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new CitiesExport,'cities_'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new CitiesExport,'cities_'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $cities=City::query();
                if(request('IDS')){
                    $cities=$cities->whereIn('id',explode(',',request('IDS')));
                }
                $cities=$cities->get();
                return Pdf::loadView('dashboard.cities.export_pdf',['cities'=>$cities])->download('cities_'.time().'.pdf');
                break;
        }
    }
}
