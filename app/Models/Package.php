<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Package extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='packages';
    protected $guarded=['id'];

    public function package_prices(){
        return $this->hasMany(PackagePrice::class,'package_id');
    }

}
