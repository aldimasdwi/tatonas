<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiDetail extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function hardware()
    {
        return $this->belongsTo(Hardware::class,'hardware_id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class,'trans_id');
    }

    public function sensor()
    {
        return $this->belongsTo(MasterSensor::class,'sensor_id');
    }


}
