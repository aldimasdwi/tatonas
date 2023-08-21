<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSensor;

class MasterSensorController extends Controller
{
    function tambah(Request $request) {
        $data = $request->all();
        $waktu = date('Y-m-d H:i', strtotime($data['waktu']));
        $data['waktu'] = $waktu;
        MasterSensor::create($data);
    
        return redirect('/dashboard');
    }

    function update(Request $request, $id) {
        $data = $request->all();
        if (isset($data['waktu'])) {
            $waktu = date('Y-m-d H:i', strtotime($data['waktu']));
            $data['waktu'] = $waktu;
        }
    
        MasterSensor::find($id)->update($data);
    
        return redirect('/dashboard');
    }
    
    function backsensor() {
        MasterSensor::onlyTrashed()->restore();
        return redirect('/dashboard');
    }

}
