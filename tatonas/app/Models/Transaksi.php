<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksi extends Model
{
    use HasFactory,SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function hardware()
    {
        return $this->belongsTo(Hardware::class, 'hardware_id');
    }

    public function created_by()
    {
        return $this->belongsTo(Hardware::class, 'created_by_id');
    }

    public function transaksiDetail()
    {
        return $this->hasOne(transaksiDetail::class);
    }
}
