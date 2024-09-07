<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OtpCheck extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='otp_check';
    protected $guarded=['id'];

}
