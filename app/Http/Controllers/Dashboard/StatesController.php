<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\StatesDataTable;
use App\Exports\StatesExport;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class StatesController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StatesDataTable $dataTable){
        return $dataTable->render('dashboard.states.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.states.create_edit');
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
        $this->validateStates($request);
        $state=State::create(array_merge($request->except(['_token','_method'])));
        if ($request->is_active && $request->is_active == '1' ) {
            $state->is_active = 1 ;
            $state->save() ;
            City::where('state_id' ,  $state->id)->update(['is_active'=> 1 ]);
        }else{
            City::where('state_id',  $state->id)->update(['is_active'=> 0 ]);
            $state->is_active = 0 ;
            $state->save() ;
        }

        if($request->default){
            State::where('id','!=',$state->id)->update(['default'=>0]);
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
    public function edit(State $state)
    {
        //
        return view('dashboard.states.create_edit',compact('state'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
        $this->validateStates($request);
        
        $state->update(array_merge($request->except(['_token','_method' ,'is_active'])));

        if ($request->is_active && $request->is_active == '1' ) {
            City::where('state_id' ,  $state->id)->update(['is_active'=> 1 ]);
            $state->is_active = 1 ;
            $state->save() ;
        }else{
            City::where('state_id',  $state->id)->update(['is_active'=> 0 ]);
            $state->is_active = 0 ;
            $state->save() ;
        }

        if($request->default){
            State::where('id','!=',$state->id)->update(['default'=>0]);
        }
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
        $state=State::withTrashed()->findOrFail($id);
        if(!$state->default){
            if($state->deleted_at){
                $state->forceDelete();
            }else{
                $state->delete();
            }
            return response()->json(['success'=>true]);
        }
        return response()->json(['success'=>false,'message'=>__('can\'t delete default')]);
    }

    public function validateStates($request){
        $valid=[
        ];
        if($request->state){
            $valid['name']=['required',Rule::unique('states','name')->whereNull('deleted_at')->ignore($request->state->id,'id')];
        }else{
            $valid['name']='required';
        }
        return $request->validate($valid);
    }
    public function deleteMulti(Request $request){
        $count=State::whereIn('id',$request->IDS)->update(['deleted_by'=>auth()->id(),'deleted_at'=>now()]);
        return response()->json(['success'=>true,'message'=>__('Delete :count Successful',['count'=>$count])]);
    }
    public function export(Request $request){
        switch ($request->export_type){
            case'csv':
                return Excel::download(new StatesExport,'states_'.time().'.csv',\Maatwebsite\Excel\Excel::CSV);
                break;
            case'excel':
                return Excel::download(new StatesExport,'states_'.time().'.xlsx',\Maatwebsite\Excel\Excel::XLSX);
                break;
            case'pdf':
                $states=State::query();
                if(request('IDS')){
                    $states=$states->whereIn('id',explode(',',request('IDS')));
                }
                $states=$states->get();
                return Pdf::loadView('dashboard.states.export_pdf',['states'=>$states])->download('states_'.time().'.pdf');
                break;
        }
    }
}
