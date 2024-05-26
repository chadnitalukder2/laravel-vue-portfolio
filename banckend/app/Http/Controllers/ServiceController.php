<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getService(){
        $services = Service::orderBy('id', 'desc')->get();

        return response()->json([
            'services' => $services
        ], 200);
        return $services;
    }//End Method

    public function addService(Request $request){
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $imagePath = $request->file('image')->store('service_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        Service::insert([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Service Data added successfully'
        ]);
    }//End Method

    public function editService( $id){
            $services = Service::where('id', $id)->first();
            return response()->json([
                'services' => $services
            ], 200);
    }//End Method

    public function updateService(Request $request, $id){
        $services = Service::where('id', $id)->first();

        $imagePath = $request->file('image')->store('service_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $services->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    public function deleteService($id){
        $service = Service::findOrFail($id);
        $service->delete();
    }//
}
