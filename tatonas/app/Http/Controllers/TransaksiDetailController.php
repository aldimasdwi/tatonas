<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiDetail;


class TransaksiDetailController extends Controller
{
    function tambah(Request $request){
        TransaksiDetail::create($request->all());

        return redirect('/dashboard');
    }

    function update(Request $request,$id){
        
        $data=$request->all();
        TransaksiDetail::find($id)->update($data);

        return redirect('/dashboard');
    }

    function backtrd() {
        TransaksiDetail::onlyTrashed()->restore();
        return redirect('/dashboard');
    }

}
