<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='states';
    protected $guarded=[];
    public function country(){
        return $this->belongsTo(Country::class,'country_id');
    }

    public function branches(){
        return $this->hasMany(ProviderBranch::class,'state_id');
    }

    public function cities(){
        return $this->hasMany(City::class,'state_id');
    }

}
