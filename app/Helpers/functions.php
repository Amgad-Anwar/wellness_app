<?php

use Algolia\AlgoliaSearch\Exceptions\RequestException;
use App\Models\Customer\ClientAccount;
use App\Models\Customer\CustomerList;
use App\Models\Customer\CustomerType;
use App\Models\ProviderAccountsProviderTypes;
use App\Models\ProviderBranch;
use App\Models\ProviderType;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

function sendNotification($token,$message,$title){
    $SERVER_API_KEY = 'AAAAElX7xsY:APA91bGtiKonwQWE_yBVdCuXiz6QYHark7aL7XoV9Aj7SJo5HqCeZm4sZjWF3ncxXP7QaDWg5iH-A9tuD5kFUIvwVncbCyURULCpcD9R6dbHJ6vq8libjgRI_-nXhDMn0_qYvIaRDueW';
    $token_1 = $token;
    $data = [
        "registration_ids" => [
            $token_1
        ],
        "notification" => [

            "title" => $title,

            "body" => $message,

            "sound"=> "default" // required for sound on ios

        ],
    ];
    $dataString = json_encode($data);
    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);

}


function PerUser($permission){
    return true ;
    return (auth()->check())?auth()->user()->can($permission):false;
}
function uploadImage($file,$folder_name='users',$input='image',$returnName='image'){
    $path = '/images/' . $folder_name . '/' . date('Y/m/d') . '/';
    if (!file_exists(public_path() . $path)) {
        File::makeDirectory(public_path() . $path, $mode = 0777, true, true);
    }
    //file new name
    $namefile = $folder_name . '_' . rand(0000, 9999) . '_' . time();
    $ext = $file->getClientOriginalExtension();
    //file old name
    $old_name = $file->getClientOriginalName();
    //convert the size of the file
    //$size = ImageUploader::GetSize($file->getSize());
    //get the mime type of the file
    $mimtype = $file->getMimeType();
    //making the new name with extension
    $mastername = $namefile . '.' . $ext;
    //list($width, $height) = getimagesize($_FILES[$input]['tmp_name']);
    $file->move(public_path() . $path, $mastername);
    return[$returnName.'_dir'=>$path,$returnName=>$mastername,
        //'original_image'=>$old_name,'original_width'=>$width,'original_height'=>$height,'original_mimtype'=>$mimtype
    ];
}

function sendSMS($otp_code, $mobile)
{
     $client = new \GuzzleHttp\Client();

    try {

        // amgad... remove comment when be in live mode "0000" ,
        // and get wellness credintials from cequens account  ,

        // $response = $client->request('POST', 'https://apis.cequens.com/sms/v1/messages', [
        //     'body' => json_encode([
        //         'senderName' => 'Wellness',
        //         'messageType' => 'text',
        //         'acknowledgement' => 0,
        //         'flashing' => 0,
        //         'messageText' => "otp code: " . $otp_code,
        //         'recipients' => $mobile,
        //     ]),
        //     'headers' => [
        //         'Authorization' => 'Bearer xxxeyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6ImExOTIzYzViNzljOWRkOTgzZTZkZWY3MDg0NjM4YWM4Y2U0NGU0OTE4NTk0NTM4MDk5ODNiZDAxODM3NjJiOTMzNWY1YzI4MDFhZDJmNWUzNTZjZDI3NjQ2NzVhZWVhNjAwMWM5YmU4ZGI4YjE3OTcwNjIxYWJlMGE2NDkzZjE1ZTYzNWQ4OTZlNWUwMGUzMTRkZjVjN2Y3Y2UyZjQ2MmZlYTY1NDNmZWE1NTFmZGJmN2JiMGIxODVjN2Y5YWQ1ZiIsImlhdCI6MTY4MTY0MzQxMiwiZXhwIjozMjU5NTIzNDEyfQ.bgu7h1gMePxP9x3V8YST_Yr5M9ejfsqqhVLMd8W5GC4',
        //         'accept' => 'application/json',
        //         'content-type' => 'application/json',
        //     ],
        // ]);

        // $statusCode = $response->getStatusCode();
        // $body = $response->getBody()->getContents();

        return true ;
    } catch (RequestException $e) {
        return false ;
    }
}


function getFirstLetterOfEachWord($string){
    $words = preg_split("/[\s,_-]+/", $string);
    $acronym = "";
    foreach ($words as $w) {
        $acronym .= mb_substr($w, 0, 1);
    }
    return $acronym;
}
function imagePath($imageDir=null, $type='users') {
    if(!$imageDir){
        return asset('images/'.$type.'/blank.svg');
    }
    if(file_exists(public_path($imageDir))){
        return asset($imageDir);
    }
    return asset('images/'.$type.'/blank.svg');
}
function selectSup($cat_id,$selected=0,$y=null,$not_id=0,$col='title',$table=\App\Models\Department::class,$hasRelations=[],$html=''){
    if($y===null){
        $y='&nbsp;&nbsp;';
    }
    $sections=$table::where('parent_id',$cat_id);
    foreach ($hasRelations as $hasRelation){
        $sections=$sections->whereHas($hasRelation);
    }
    $sections=$sections->get();
    foreach ($sections as $section) {
        if($section->id!=$not_id){
            $html.='<option ';
            if($section->id==$selected||(is_array($selected)&&in_array($section->id,$selected))){$html.='selected="selected"';}
            $html.=' value="'.$section->id.'">'.$y.'⁞.. '.$section->$col.'</option>';
            if($section->parent_id!=0){
                $y.='&nbsp;&nbsp;';
                selectSup($section->id,$selected,$y,$not_id,$col,$table,$hasRelations,$html);
            }
            $y='&nbsp;&nbsp;';
        }
    }
    return $html;
}

function selectSupAmgad($cat_id,$selected=0,$y=null,$not_id=0,$col='title',$table=\App\Models\Department::class,$hasRelations=[],$html=''){
    if($y===null){
        $y='&nbsp;&nbsp;';
    }
    $sections=$table::where('parent_id',$cat_id);
    // foreach ($hasRelations as $hasRelation){
    //     $sections=$sections->whereHas($hasRelation);
    // }
    $sections=$sections->get();
    foreach ($sections as $section) {
        if($section->id!=$not_id){
            $html.='<option ';
            if($section->id==$selected||(is_array($selected)&&in_array($section->id,$selected))){$html.='selected="selected"';}
            $html.=' value="'.$section->id.'">'.$y.'⁞.. '.$section->$col.'</option>';
            if($section->parent_id!=0){
                $y.='&nbsp;&nbsp;';
                selectSup($section->id,$selected,$y,$not_id,$col,$table,$hasRelations,$html);
            }
            $y='&nbsp;&nbsp;';
        }
    }
    return $html;
}
function getEloquentSqlWithBindings($query)
{
    return vsprintf(str_replace('?', '%s', $query->toSql()), collect($query->getBindings())->map(function ($binding) {
        return is_numeric($binding) ? $binding : "'{$binding}'";
    })->toArray());
}
//ini_get('upload_max_filesize')
function return_bytes($val)
{
    $val  = trim($val);

    if (is_numeric($val))
        return $val;

    $last = strtolower($val[strlen($val)-1]);
    $val  = substr($val, 0, -1); // necessary since PHP 7.1; otherwise optional

    switch($last) {
        // The 'G' modifier is available since PHP 5.1.0
        case 'g':
            $val *= 1024;
        case 'm':
            $val *= 1024;
        case 'k':
            $val *= 1024;
    }

    return $val;
}
function explodeTable($model,$action='updated'){
    try {
        switch ($model->getTable()){
            case 'mappings':
                if(\Illuminate\Support\Facades\DB::table('mappings_name_explodes')->where('mapping_id',$model->id)->count()){
                    \Illuminate\Support\Facades\DB::table('mappings_name_explodes')->where('mapping_id',$model->id)->delete();
                }
                if(in_array($action,['updated','created'])){
                    \Illuminate\Support\Facades\DB::table('mappings_name_explodes')->insert(collect(explode(' ',$model->name))->filter(function($string, $position){
                        return ($string)?true:false;
                    })->values()->map(function($string,$position)use($model){
                        if($string){
                            return [
                                'position'=>$position,
                                'string'=>$string,
                                'mapping_id'=>$model->id,
                            ];
                        }
                    })->toArray());
                }

                break;
            case 'our_price_lists':
                if(\Illuminate\Support\Facades\DB::table('our_price_lists_service_name_ar_explodes')->where('our_price_list_id',$model->id)->count()){
                    \Illuminate\Support\Facades\DB::table('our_price_lists_service_name_ar_explodes')->where('our_price_list_id',$model->id)->delete();
                }
                if(\Illuminate\Support\Facades\DB::table('our_price_lists_service_name_en_explodes')->where('our_price_list_id',$model->id)->count()){
                    \Illuminate\Support\Facades\DB::table('our_price_lists_service_name_en_explodes')->where('our_price_list_id',$model->id)->delete();
                }
                if(\Illuminate\Support\Facades\DB::table('our_price_lists_service_medical_name_explodes')->where('our_price_list_id',$model->id)->count()){
                    \Illuminate\Support\Facades\DB::table('our_price_lists_service_medical_name_explodes')->where('our_price_list_id',$model->id)->delete();
                }
                if(in_array($action,['updated','created'])) {
                    if($model->service_name_ar) {
                        $createdData=collect(explode(' ', $model->service_name_ar))->filter(function($string, $position){
                            return ($string)?true:false;
                        })->values()->map(function ($string, $position) use ($model) {
                            return [
                                'position' => $position,
                                'string' => $string,
                                'our_price_list_id' => $model->id,
                            ];
                        })->toArray();
                        if($createdData){
                            \Illuminate\Support\Facades\DB::table('our_price_lists_service_name_ar_explodes')->insert($createdData);
                        }
                    }
                    if($model->service_name_en) {
                        $createdData=collect(explode(' ', $model->service_name_en))->filter(function($string, $position){
                            return ($string)?true:false;
                        })->values()->map(function ($string, $position) use ($model) {
                            if ($string) {
                                return [
                                    'position' => $position,
                                    'string' => $string,
                                    'our_price_list_id' => $model->id,
                                ];
                            }
                        })->toArray();
                        if($createdData){
                            \Illuminate\Support\Facades\DB::table('our_price_lists_service_name_en_explodes')->insert($createdData);
                        }

                    }

                    if($model->service_medical_name) {
                        $createdData=collect(explode(' ', $model->service_medical_name))->filter(function($string, $position){
                            return ($string)?true:false;
                        })->values()->map(function ($string, $position) use ($model) {
                            if ($string) {
                                return [
                                    'position' => $position,
                                    'string' => $string,
                                    'our_price_list_id' => $model->id,
                                ];
                            }
                        })->toArray();
                        if($createdData){
                            \Illuminate\Support\Facades\DB::table('our_price_lists_service_medical_name_explodes')->insert($createdData);
                        }
                    }
                }
                break;
        }
    }catch (Exception $e){
        dd($e);
    }

}
function matchingCheckAndCreate($model,$column_name='service_name_ar',$table_column_check='mappings_name_explodes.mapping_id'){
    $query1="SELECT MAX(percentage) AS percentage FROM (SELECT (COUNT('x')/(SELECT COUNT('x') FROM `our_price_lists_".$column_name."_explodes` WHERE $table_column_check=$model->id)*100) AS percentage

    FROM (

 SELECT DISTINCT our_price_lists_".$column_name."_explodes.position,our_price_list_id,our_price_lists_".$column_name."_explodes.string,mappings_name_explodes.string AS mapping_string,mappings_name_explodes.mapping_id FROM `our_price_lists_".$column_name."_explodes` INNER JOIN mappings_name_explodes ON mappings_name_explodes.string=our_price_lists_".$column_name."_explodes.string WHERE
our_price_lists_".$column_name."_explodes.our_price_list_id='$model->id'

    ) as d GROUP BY our_price_list_id,mapping_id ) AS dd";
    $maxPercentage=\Illuminate\Support\Facades\DB::select($query1);
//            echo $query;
//            dd($maxPercentage);
    if($maxPercentage){
        $maxPercentage=$maxPercentage[0]->percentage;
        $query2="SELECT * FROM (SELECT our_price_list_id,mapping_id,(COUNT('x')/((SELECT COUNT('x') FROM `our_price_lists_".$column_name."_explodes` WHERE $table_column_check=$model->id))*100) AS percentage
        FROM (
         SELECT DISTINCT our_price_lists_".$column_name."_explodes.position,our_price_list_id,our_price_lists_".$column_name."_explodes.string,mappings_name_explodes.string AS mapping_string,mappings_name_explodes.mapping_id FROM `our_price_lists_".$column_name."_explodes` INNER JOIN mappings_name_explodes ON mappings_name_explodes.string=our_price_lists_".$column_name."_explodes.string WHERE
our_price_lists_".$column_name."_explodes.our_price_list_id='$model->id'

        )as d GROUP BY our_price_list_id,mapping_id) AS dd WHERE percentage='$maxPercentage'";
        $matchingData=\Illuminate\Support\Facades\DB::select($query2);
        echo $query1;
        echo'<br><========================<br>';
        echo $query2;
        dd('');
        \Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->where('our_price_list_id',$model->id)->delete();
        foreach ($matchingData as $createdData){
            $data=(array)$createdData;
            unset($data['percentage']);
            if(!$firstData=\Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->where($data)->first()){
                \Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->insert((array)$createdData);
            }else{
                \Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->where('id',$firstData->id)->update([
                    'percentage'=>($createdData->percentage>$firstData->percentage?$createdData->percentage:$firstData->percentage)
                ]);
            }
        }
    }
}
function insertMatching($model,$action='updated'){
    if(in_array($action,['updated','created'])) {
        switch ($model->getTable()) {
            case 'mappings':
                matchingCheckAndCreate($model, 'service_name_ar');
                matchingCheckAndCreate($model, 'service_name_en');
                matchingCheckAndCreate($model, 'service_medical_name');
                break;
            case 'our_price_lists':
                matchingCheckAndCreate($model, 'service_name_ar', 'our_price_lists_service_name_ar_explodes.our_price_list_id');
                matchingCheckAndCreate($model, 'service_name_en', 'our_price_lists_service_name_en_explodes.our_price_list_id');
                matchingCheckAndCreate($model, 'service_medical_name', 'our_price_lists_service_medical_name_explodes.our_price_list_id');
                break;
        }
    }else{
        \Illuminate\Support\Facades\DB::table('our_price_list_service_name_ar_mapping_matches')->where([
            ($model->getTable()=='mappings'?'mapping_id':'our_price_list_id')=>$model->id,
        ])->delete();
    }
}
function log_admin_action($user_action=null,$user_action_table=null,$user_action_table_id=0,$data_json=null){
    $user_id=0;
    $user_name=null;
    $createLog=false;
    if(auth()->check()){
        $user_id=auth()->user()->id;
        $user_name=auth()->user()->name;
        $createLog=true;
    }
    if($createLog){
        $log=new \App\Models\AdminLogs();
        $log->user_id=$user_id;
        $log->user_name=$user_name;
        $log->user_action=$user_action;
        $log->user_action_table=$user_action_table;
        $log->user_action_table_id=$user_action_table_id;
        $log->data_json=$data_json;
        $log->add_date=date("Y-m-d H:i:s");
        $log->save();
    }
}
function log_admin_changes_action($action,$model){
    $changes = $model->getChanges();
    $skipColumns=['add_date','created_at','updated_at','added_by','created_by','updated_by'];
    //dd($changes,$model->getOriginal());
    $records_change=[];
    $text='';
    foreach ($changes as $key=>$value){
        if(!in_array($key,$skipColumns)){
//            $text.='<li>'."@lang('main.$key') @lang('main.Chage')".." @lang('main.Changed To') ".$value.'</li>';
            $oldVal=$model->getOriginal($key);
            $text.='<li>'."@lang('main.:key Changed Form :oldVal To :newVal',['key'=>'$key','oldVal'=>'$oldVal','newVal'=>'$value'])</li>";
            $records_change[]=[
                $key=>[
                    'from'=>$model->getOriginal($key),
                    'to'=>$value,
                ]
            ];
        }
    }
    if($text){
        $text='<ul>'.$text.'<ul>';
    }
    if($records_change){
        $createdData=[
            'action'=>$action,
            'table_id'=>$model->id,
            'table_name'=>$model->getTable(),
            'text'=>$text,
            'records_change'=>json_encode($records_change),
            'ip_address'=>request()->ip(),
            'user_agent'=>request()->userAgent(),
            'request_url'=>request()->fullUrl(),
            'request_method'=>request()->method(),
            'request_data'=>json_encode(request()->input()),
            'created_by'=>(auth()->check()?auth()->id():0),
            'created_by_name'=>(auth()->check()?auth()->user()->name:'Automation System'),
            'created_at'=>date('Y-m-d H:i:s'),
        ];
        \App\Models\AdminChangesLogs::create($createdData);
    }

}


function branches_count($column, $id )
{
    $types = ProviderType::where('parent_id', 0 )->get();
    foreach ($types as $key => $type) {
        $total_count = 0;
        $ids = $type->children->pluck('id')->toArray();
        $accounts = ProviderAccountsProviderTypes::where('provider_type_id', $type->id )->orWhereIn('provider_type_id' , $ids )
        ->pluck('provider_account_id')->toArray();
        $count = ProviderBranch::whereIn('provider_account_id', $accounts )
        ->where('provider_is_active' , Session::get('active_branch_status') ?? 1 )
        ->where('status' , 'approved' )->where($column, $id)->count() ;
        $type['total_count'] = $count;


    }
    return $types ;

}

function branches_count_when_location_is_null($type_of_location)
{
    $types = ProviderType::where('parent_id', 0 )->get();
    if( $type_of_location == 'country'){
        foreach ($types as $key => $type) {
            $ids = $type->children->pluck('id')->toArray();
            $accounts = ProviderAccountsProviderTypes::where('provider_type_id', $type->id )->orWhereIn('provider_type_id' , $ids )
            ->pluck('provider_account_id')->toArray();
            $count = ProviderBranch::whereIn('provider_account_id', $accounts )->where('provider_is_active' , Session::get('active_branch_status') ?? 1 )->where('status' , 'approved' )->where('country_id', 0 )->where('state_id', 0 )->where('city_id', 0 )->count() ;
            $type['total_count'] = $count;
        }
    }elseif ( $type_of_location == 'state') {
        foreach ($types as $key => $type) {
            $ids = $type->children->pluck('id')->toArray();
            $accounts = ProviderAccountsProviderTypes::where('provider_type_id', $type->id )->orWhereIn('provider_type_id' , $ids )
            ->pluck('provider_account_id')->toArray();
            $count = ProviderBranch::whereIn('provider_account_id', $accounts )->where('provider_is_active' , Session::get('active_branch_status') ?? 1 )->where('state_id', 0 )->where('city_id', 0 )->count() ;
            $type['total_count'] = $count;
        }
    }elseif ( $type_of_location == 'city') {
        foreach ($types as $key => $type) {
            $ids = $type->children->pluck('id')->toArray();
            $accounts = ProviderAccountsProviderTypes::where('provider_type_id', $type->id )->orWhereIn('provider_type_id' , $ids )
            ->pluck('provider_account_id')->toArray();
            $count = ProviderBranch::whereIn('provider_account_id', $accounts )->where('provider_is_active' , Session::get('active_branch_status') ?? 1 )->where('city_id', 0 )->count() ;
            $type['total_count'] = $count;
        }
    }
 

    return $types ;

}

function encryptId($id)
{
    return encrypt($id);
}
function customer_overview_count($column, $id )
{
    $types = CustomerType::all();
    foreach ($types as $key => $type) {
      
        $accounts = ClientAccount::where('customer_type_id', $type->id )
        ->pluck('id')->toArray();
        $count = CustomerList::whereIn('client_account_id', $accounts )->where($column, $id)->count() ;
        $type['total_count'] = $count;

    }
    return $types ;

}