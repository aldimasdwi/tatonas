<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hardware;
use App\Models\MasterSensor;
use App\Models\Transaksi;
use Auth;
use App\Models\TransaksiDetail;
use App\Models\HardwareDetail;

class HardwareController extends Controller
{
    function tambahhardware(Request $request) {
        $data = $request->all();
    
        foreach (['local_time', 'waktu'] as $field) {
            if (isset($data[$field])) {
                $timestamp = strtotime($data[$field]);
    
                if ($timestamp !== false) {
                    $data[$field] = date('Y-m-d H:i', $timestamp);
                } else {
                    return redirect()->back()->with('error', "Format tanggal $field tidak valid.");
                }
            }
        }
    
        Hardware::create($data);
    
        return redirect('/dashboard');
    }

  
function update(Request $request, $id) {
    $data = $request->all();
    $hardware = Hardware::find($id);

    foreach (['local_time', 'waktu'] as $field) {
        if (isset($data[$field])) {
            $timestamp = strtotime($data[$field]);
    
            if ($timestamp !== false) {
                $data[$field] = date('Y-m-d H:i', $timestamp);
            } else {
                return redirect()->back()->with('error', "Format tanggal $field tidak valid.");
            }
        }
    }
    $hardware->update($data);

    return redirect('/dashboard');
}

function backhardware() {
    Hardware::onlyTrashed()->restore();
    return redirect('/dashboard');
}

public function hardware(Request $request)
{
    $startDate = $request->from . ' 00:00:00';
    $endDate = $request->end . ' 23:59:59'; 
    $data = Transaksi::whereBetween('waktu', [$startDate, $endDate])
    ->get();
    
        $idsemua = Hardware::whereBetween('local_time', [$startDate, $endDate])->first();

        $idt = Transaksi::whereBetween('waktu', [$startDate, $endDate])->pluck('id');

        $tde = TransaksiDetail::whereIn('trans_id', $idt)->get();

        $values = [];
        
        foreach ($tde as $t) {
            $values[] = $t->value;
        }
        
        $sensor = $request->hardware;

        $max= max($values); 
        $min= min($values); 
        

        $sen = MasterSensor::all();
        $har = Hardware::all();
        $detail = HardwareDetail::all();
        $trans = Transaksi::all();
        $tra = TransaksiDetail::all();


        return view('superadmin.superadmin',compact('sen','har','detail','trans','tra','data','idsemua','tde','max','min','sensor'));

    
}

    
}
