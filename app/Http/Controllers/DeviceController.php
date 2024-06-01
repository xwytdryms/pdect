<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;

class DeviceController extends Controller
{
    

    public function index()
    {
        // Fetch latest devices data
        $devices = Device::latest()->get();

        // Extract payloads
        $deviceData = $devices->map(function($device){

            return [
                'id'=> $device->id,
                'device_id' => $device->device_id,
                'device_name' => $device->name,
                'device_eui' => $device->device_eui,
                'description' => $device->description,
                'address' => $device->address,
                'latitude' => $device->latitude,
                'longitude' => $device->longitude 
            ];

        });
        

        return view('halaman.manajemenperangkat',['device'=>$deviceData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDeviceRequest $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'device_id' => 'required|max:255',
            'device_eui' => 'required|max:255',
            'device_class' => 'nullable|max:255',
            'status' => 'nullable',
            'description' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
        ]);
        
        Device::create($request->all());

        return redirect()->route('device.index')
            ->with('success', 'Device created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        //
    }
}
