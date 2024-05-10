<?php

use Illuminate\Support\Facades\Route;
use App\Models\Device;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DataController;
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

Route::get('/devices', [DeviceController::class,'web_index']);//{
    // $devices = [
    //     [
    //         "id" => 1,
    //         "name" => "Sensor Suhu",
    //         "min_value" => 0,
    //         "max_value" => 100,
    //         "current_value" => 25
    //     ],
    //     [
    //         "id" => 2,
    //         "name" => "Kipas Angin",
    //         "min_value" => 0,
    //         "max_value" => 5,
    //         "current_value" => 2
    //     ],
    //     [
    //         "id" => 3,
    //         "name" => "Lampu Kamar",
    //         "min_value" => 0,
    //         "max_value" => 100,
    //         "current_value" => 50
    //     ],
    //     [
    //         "id" => 4,
    //         "name" => "Lampu Taman",
    //         "min_value" => 0,
    //         "max_value" => 1,
    //         "current_value" => 1
    //     ]
    // ];

    // return view('devices', [
    //     "title" => "devices",
    //     "devices" => Device::all()
    // ]);
//});


Route::get('/dashboard', function () { //ini untuk mengarahkan ke routenya ini bebas namanya untuk mengindentifikasi di web saja
   return view('dashboard', [
        "tittle"=>"dashboard"
    ]);// ini untuk menampilkan web nya

});//KALAU ADA UNDIFENED VARIABEL BERARTI VARIABEL HARUS DIKENALI DARI SINI

Route::get('/devices/{id}', [DataController::class,'web_show']);//{
    // $select_device = [];
    // foreach($devices as $device){
    //     if($device["id"] == $id){
    //         $select_device = $device;
    //     }
    // };


    // return view('device', [
    //     "title" => "device",
    //     "device" => Device::find($id)
    // ]);
//});
Route::get('/rules', function(){
    return view('rules');
});
Route::get('/users', function(){
    return view('users');
});

