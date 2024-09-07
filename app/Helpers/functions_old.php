<?php
function PerUser($permission){
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
    list($width, $height) = getimagesize($_FILES[$input]['tmp_name']);
    $file->move(public_path() . $path, $mastername);
    return[$returnName.'_dir'=>$path,$returnName=>$mastername,
        //'original_image'=>$old_name,'original_width'=>$width,'original_height'=>$height,'original_mimtype'=>$mimtype
    ];
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
            if($section->id==$selected||(is_array($section)&&in_array($section->id,$section))){$html.='selected="selected"';}
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
                    })->map(function($string,$position)use($model){
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
                        })->map(function ($string, $position) use ($model) {
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
                        })->map(function ($string, $position) use ($model) {
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
                        })->map(function ($string, $position) use ($model) {
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
    $query="SELECT MAX(percentage) AS percentage FROM (SELECT (COUNT('x')/MAX(our_price_lists_".$column_name."_explodes.position)*100) AS percentage FROM our_price_lists_".$column_name."_explodes
INNER JOIN mappings_name_explodes ON mappings_name_explodes.string=our_price_lists_".$column_name."_explodes.string
WHERE $table_column_check='$model->id'
GROUP BY our_price_lists_".$column_name."_explodes.our_price_list_id,mappings_name_explodes.mapping_id ) AS dd";
    $maxPercentage=\Illuminate\Support\Facades\DB::select($query);
//            echo $query;
//            dd($maxPercentage);
    if($maxPercentage){
        $maxPercentage=$maxPercentage[0]->percentage;
        $query="SELECT * FROM (SELECT our_price_lists_".$column_name."_explodes.our_price_list_id,mappings_name_explodes.mapping_id,(COUNT('x')/MAX(our_price_lists_".$column_name."_explodes.position)*100) AS percentage FROM our_price_lists_".$column_name."_explodes
INNER JOIN mappings_name_explodes ON mappings_name_explodes.string=our_price_lists_".$column_name."_explodes.string
WHERE $table_column_check='$model->id'
GROUP BY our_price_lists_".$column_name."_explodes.our_price_list_id,mappings_name_explodes.mapping_id) AS dd WHERE percentage='$maxPercentage'";
        $matchingData=\Illuminate\Support\Facades\DB::select($query);
        foreach ($matchingData as $createdData){
            $data=(array)$createdData;
            unset($data['percentage']);
            if(!$firstData=\Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->where($data)->first()){
                \Illuminate\Support\Facades\DB::table('our_price_list_'.$column_name.'_mapping_matches')->insert((array)$createdData);
            }else{
                \Illuminate\Support\Facades\DB::where('id',$firstData->id)->update([
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
