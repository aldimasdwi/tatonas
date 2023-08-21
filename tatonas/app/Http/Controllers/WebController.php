<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSensor;
use App\Models\Hardware;
use App\Models\Transaksi;
use PDF;
use Auth;
use App\Models\TransaksiDetail;
use App\Models\HardwareDetail;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class WebController extends Controller
{
    public function msensor(){
        $sen = MasterSensor::all();
        $har = Hardware::all();
        $detail = HardwareDetail::all();
        $trans = Transaksi::all();
        $tra = TransaksiDetail::all();


        return view('superadmin.superadmin',compact('sen','har','detail','trans','tra'));
    }

    public function tambah(){
        return view('superadmin.tambah');
    }
    public function update($id){
        $b = MasterSensor::find($id);

        return view('superadmin.update',compact('b'));
    }
    function deletesensor($id){
        MasterSensor::destroy($id);

        return redirect('/dashboard');
    }

    function harddeletesensor($id){
        $pro = MasterSensor::withTrashed()->find($id);
        $pro->forceDelete();

        return redirect('/dashboard');
    }
    
    function tambahhardware(){
        return view('superadmin.hardware.tambah');
    }

    function hardwaredelete($id){
        Hardware::destroy($id);

        return redirect('/dashboard');
    }

    function hardwareupdate($id){
        $b = Hardware::find($id);

        return view('superadmin.hardware.update',compact('b'));
    }


    public function tambahharditail(){
        $har = Hardware::all();
        $sen = MasterSensor::all();

        return view('superadmin.hardwaredetail.tambah',compact('har','sen'));
    }

    public function hardetailupdate($id){
        $hard = HardwareDetail::find($id);
        $har = Hardware::all();
        $sen = MasterSensor::all();
        return view('superadmin.hardwaredetail.update',compact('har','hard','sen'));
    }

function hardetaildelete($id){
    HardwareDetail::destroy($id);

    return redirect('/dashboard');
}

    function tambahtransaksi(){
        $har = Hardware::all();

        return view('superadmin.transaksi.tambah',compact('har'));

    }

    function transaksiupdate($id) {
        $tar = Transaksi::find($id);
        $har = Hardware::all();
        return view('superadmin.transaksi.update',compact('tar','har'));

    }

    function transaksidelete($id){
        Transaksi::destroy($id);

         return redirect('/dashboard');
    }

    function tambahtransaksidetail() {
        $sen = MasterSensor::all();
        $har = Hardware::all();
        $trans = Transaksi::all(); 

        return view('superadmin.transaksidetail.tambah',compact('trans','har','sen'));
    }

    function transaksidetailupdate($id){
        $sen = MasterSensor::all();
        $har = Hardware::all();
        $trans = Transaksi::all(); 
        $td = TransaksiDetail::find($id);
        return view('superadmin.transaksidetail.update',compact('trans','har','sen','td'));
    }

    function transaksidetaildelete($id){
        TransaksiDetail::destroy($id);

         return redirect('/dashboard');
    }

    function hharddel($id){
        $pro = Hardware::withTrashed()->find($id);
        $pro->forceDelete();

        return redirect('/dashboard');
    }
    
    function hardhddetail($id){
        $pro = HardwareDetail::withTrashed()->find($id);
        $pro->forceDelete();

        return redirect('/dashboard');
    }
    
    function hardtransaksi($id){
        $pro = Transaksi::withTrashed()->find($id);
        $pro->forceDelete();

        return redirect('/dashboard');
    }

    function hardttd($id){
        $pro = TransaksiDetail::withTrashed()->find($id);
        $pro->forceDelete();

        return redirect('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    

    public function pdf(Request $request)
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
    
    
            return view('pdf',compact('sen','har','detail','trans','tra','data','idsemua','tde','max','min','sensor'));
    
        
    }

    public function excel(Request $request)
{
    if ($request->hardware === '4001') {
        $startDate = $request->from . ' 00:00:00';
        $endDate = $request->end . ' 23:59:59';

        $transaksiData = Transaksi::whereBetween('waktu', [$startDate, $endDate])->get();

        $id = Hardware::where('hardware', $request->hardware)->pluck('id')->first();

        $combinedData = [];
        
        // Mengambil semua detail TransaksiDetail sekali
        $details = TransaksiDetail::where('hardware_id', $id)->get();
        $values = $details->pluck('value')->toArray();
        
        foreach ($transaksiData as $transaksi) {
            $combinedData[] = [
                'waktu' => $transaksi->waktu,
                'value' => implode(', ', $values)
            ];
        }
        

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Waktu');
        $sheet->setCellValue('B1', 'Value');
        $row = 2;
        foreach ($combinedData as $data) {
            $sheet->setCellValue('A' . $row, $data['waktu']);
            $sheet->setCellValue('B' . $row, $data['value']);
            $row++;
        }

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="nama_file.xlsx"');
        header('Cache-Control: max-age=0');

        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
    }
}


}
