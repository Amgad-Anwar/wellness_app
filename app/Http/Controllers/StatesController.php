<?php

namespace App\Http\Controllers;
use App\Models\City;
use Illuminate\Http\Request;

class StatesController extends Controller{

    public function getCities(Request $request){
        if($request->ajax()){
            if($request->state_id){
                $html='<option value="">'.__('Select :type',['type'=>__('City')]).'</option>';
                $cities=City::where('state_id',request('state_id'))->where('is_active' , 1)->pluck('name','id')->toArray();
                foreach ($cities as $id=>$name){
                    $html.='<option '.($request->selected==$id?'selected="selected"':'').' value="'.$id.'">'.$name.'</option>';
                }
                return response()->json(['success'=>true,'html'=>$html]);
            }
        }
        return abort(404);
    }


    
}
