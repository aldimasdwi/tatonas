<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hardware extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];
    protected $dates = ['deleted_at'];



    public function hardwareDetail()
    {
        return $this->hasOne(HardwareDetail::class);
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }

    public function created_by ()
    {
        return $this->hasOne(Transaksi::class);
    }

}
