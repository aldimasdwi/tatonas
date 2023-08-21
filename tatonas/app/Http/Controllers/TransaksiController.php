<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;


class TransaksiController extends Controller
{
    function tambahtransaksi(Request $request){
        $data = $request->all();
        $waktu = date('Y-m-d H:i', strtotime($data['waktu']));
        $data['waktu'] = $waktu;
        Transaksi::create($data);
    
        return redirect('/dashboard');
    }
    function update(Request $request,$id){
        $data = $request->all();
        $waktu = date('Y-m-d H:i', strtotime($data['waktu']));
        $data['waktu'] = $waktu;
        $ar = Transaksi::find($id);
        $ar->update($data);
    
        return redirect('/dashboard');
    }

    function backtransaksi() {
        Transaksi::onlyTrashed()->restore();
        return redirect('/dashboard');
    }
}
