<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HardwareDetail;

class HardwareDetailController extends Controller
{
    function tambahharditail(Request $request){
        HardwareDetail::create($request->all());

        return redirect('/dashboard');
    }
    function updatehrdetail(Request $request,$id) {
        $data = $request->all();
        $har = HardwareDetail::find($id);
        $har->update($data);
        return redirect('/dashboard');
    }

    function backhd() {
        HardwareDetail::onlyTrashed()->restore();
        return redirect('/dashboard');
    }
}
