<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterSensor extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    

    public function hardwareDetail()
    {
        return $this->hasOne(HardwareDetail::class);
    }

    public function transaksiDetail()
    {
        return $this->hasOne(TransaksiDetail::class);
    }
    
}
