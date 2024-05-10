<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\Device;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return Data::all();
    }

    public function store(Request $request)
    {
        $data = new Data; // ctrl + d selesct
        $data->device_id = $request->device_id;
        $data->data = $request->data;
        $data->save();
        return response()->json([
            "message" => "Data telah ditambahkan."
        ], 201);

        if (Device::where('id', $request->device_id)->exists()){
            $device = Device::find($request->device_id);
            $device->current_value = $request->data;
            $device->save();
        }
    }

    public function show(string $id)
    {
        return Data::where('device_id', $id)->orderBy('created_at', 'DESC')->get();
    }

    public function web_show (string $id){
        return view('device',[
            "tittle" => "device",
            "device" => Device::find($id),
            "data" => Data::where('device_id',$id)->orderBy('created_at', 'DESC')->get()
        ]);
    }
}
