<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\HardwareDetailController;
use App\Http\Controllers\MasterSensorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('lendingpage');
});

Route::post('/registerr', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [WebController::class, 'msensor']);

//masterr sensor
Route::get('/tambah', [WebController::class, 'tambah']);
Route::get('/tam/{id}', [WebController::class, 'update']);
Route::get('/del/{id}', [WebController::class, 'deletesensor']);
Route::get('/harddel/{id}', [WebController::class, 'harddeletesensor']);
Route::post('/tambah', [MasterSensorController::class, 'tambah']);
Route::post('/updatesensor/{id}', [MasterSensorController::class, 'update']);
Route::post('/backsensor', [MasterSensorController::class, 'backsensor']);


//hardware
Route::get('/tambahhardware', [WebController::class, 'tambahhardware']);
Route::post('/tambahhardware', [HardwareController::class, 'tambahhardware']);
Route::get('/hardwareupdate/{id}', [WebController::class, 'hardwareupdate']);
Route::get('/hardwaredelete/{id}', [WebController::class, 'hardwaredelete']);
Route::get('/hharddel/{id}', [WebController::class, 'hharddel']);
Route::post('/updatehardware/{id}', [HardwareController::class, 'update']);
Route::post('/backhardware', [HardwareController::class, 'backhardware']);

Route::post('/dashboard', [HardwareController::class, 'hardware']);



//hardwaredetail
Route::get('/tambahharditail', [WebController::class, 'tambahharditail']);
Route::post('/tambahhrdetail', [HardwareDetailController::class, 'tambahharditail']);
Route::get('/hardetailupdate/{id}', [WebController::class, 'hardetailupdate']);
Route::post('/updatehrdetail/{id}', [HardwareDetailController::class, 'updatehrdetail']);
Route::post('/backhd', [HardwareDetailController::class, 'backhd']);
Route::get('/hardhddetail/{id}', [WebController::class, 'hardhddetail']);



//transaksi
Route::get('/tambahtransaksi', [WebController::class, 'tambahtransaksi']);
Route::post('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi']);
Route::get('/transaksiupdate/{id}', [WebController::class, 'transaksiupdate']);
Route::post('/update/{id}', [TransaksiController::class, 'update']);
Route::get('/transaksidelete/{id}', [WebController::class, 'transaksidelete']);
Route::post('/backtransaksi', [TransaksiController::class, 'backtransaksi']);
Route::get('/hardtransaksi/{id}', [WebController::class, 'hardtransaksi']);



//transaksi detail
Route::get('/tambahtransaksidetail', [WebController::class, 'tambahtransaksidetail']);
Route::post('/tambahh', [TransaksiDetailController::class, 'tambah']);
Route::get('/transaksidetailupdate/{id}', [WebController::class, 'transaksidetailupdate']);
Route::post('/updatetransaksidetail/{id}', [TransaksiDetailController::class, 'update']);
Route::get('/transaksidetaildelete/{id}', [WebController::class, 'transaksidetaildelete']);
Route::post('/backtrd', [TransaksiDetailController::class, 'backtrd']);
Route::get('/hardttd/{id}', [WebController::class, 'hardttd']);

//download
Route::post('/pdf', [WebController::class, 'pdf']);
Route::get('/excel', [WebController::class, 'excel']);



Route::post('/logout', [WebController::class, 'logout']);

});


