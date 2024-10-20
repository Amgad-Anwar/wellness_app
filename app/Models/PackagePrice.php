<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackagePrice extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='package_prices';
    protected $guarded=['id'];

        
    public function package(){
        return $this->belongsTo(Package::class,'package_id');
    }


}
