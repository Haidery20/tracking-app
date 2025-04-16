<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $devices = $user->devices()->paginate(10);
        return view('devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('devices.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'device_id' => 'required|string|max:255|unique:devices',
            'description' => 'nullable|string|max:255',
        ]);

        $device = Device::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'device_id' => $request->device_id,
            'description' => $request->description,
            'status' => true,
        ]);

        return redirect()->route('devices.index')->with('success', 'Device created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Device $device)
    {
        $this->authorize('view', $device);
        return view('devices.show', compact('device'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Device $device)
    {
        $this->authorize('update', $device);
        return view('devices.edit', compact('device'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Device $device)
    {
        $this->authorize('update', $device);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'device_id' => 'required|string|max:255|unique:devices,device_id,' . $device->id,
            'description' => 'nullable|string|max:255',
        ]);

        $device->update([
            'name' => $request->name,
            'device_id' => $request->device_id,
            'description' => $request->description,
        ]);

        return redirect()->route('devices.index')->with('success', 'Device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Device $device)
    {
        $this->authorize('delete', $device);
        
        $device->delete();
        return redirect()->route('devices.index')->with('success', 'Device deleted successfully');
    }
}
