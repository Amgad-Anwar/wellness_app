<?php

namespace App\Http\Middleware;

use App\Http\Resources\MediaImageResource;
use App\Models\Language;
use App\Models\TemporaryUpload;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class UserRoles
{
    public function getRoute(){
        return Route::current()->getName();
    }
    public function handle(Request $request, Closure $next)
    {
        
        return $next($request);
        //auth()->loginUsingId(1);
        if(auth()->check()){
            $type=null;
            $page=null;
            if(str_contains($this->getRoute(),'.')){
                list($type,$page)=explode('.',$this->getRoute());
            }


//            dd($this->getRoute(),PerUser($this->getRoute()));
//            $session_id=session()->getId();
//            $temp=TemporaryUpload::where('session_id',$session_id)->first();
//            View::share('mediaImages',($temp)?MediaImageResource::collection($temp->getMedia('support_request')):[]);
            if(PerUser($this->getRoute())||
            ($page=='change_cpt_service'&&PerUser($type.'.edit'))||
            (in_array($page,['import_match_columns','import_match_columns_update','import_mapping','import_mapping_insert','import_mapping_destroy'])&&PerUser($type.'.import'))||
            ($page=='multi_destroy'&&PerUser($type.'.destroy'))|| 
            ($page=='change_service_type'&&PerUser($type.'.edit'))||
            ($page=='create_match_import'&&PerUser($type.'.create'))||
            ($page=='store'&&PerUser($type.'.create'))||
            ($page=='update'&&PerUser($type.'.edit'))||
            ($page=='change_status'&&PerUser($type.'.edit'))||
            ($type=='services_approvals')||
            in_array($this->getRoute(),['dashboard','users.profile','users.profile_update'])||
            (PerUser($type.'.import')&&in_array($page,['import_download','import_match','import_match_post','import_match_check']))){
                return $next($request);
            }
            abort(400);
        }
    }
}
