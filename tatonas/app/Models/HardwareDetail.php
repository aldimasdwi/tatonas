<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HardwareDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function hardware()
    {
        return $this->belongsTo(Hardware::class,'hardware_id');
    }

    public function sensor()
    {
        return $this->belongsTo(MasterSensor::class,'sensor_id');
    }
}
