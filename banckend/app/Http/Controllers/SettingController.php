<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function getSetting(){
        $settings = Setting::all();
        $setting = Setting::first();
        return response()->json([
            'settings' => $settings,
            'setting' => $setting
        ], 200);
    }//End Method

    public function addSetting(Request $request){
        $request->validate([
            'short_desc' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'facebook' => 'required|string',
            'github' => 'required|string',
            'copy_right' => 'required|string',
            'logo_img' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $imagePath = $request->file('logo_img')->store('setting_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        Setting::insert([
            'short_desc' => $request->short_desc,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'github' => $request->github,
            'copy_right' => $request->copy_right,
            'logo_img' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Setting Data added successfully'
        ]);
    } //End Method

    public function editSetting( $id)
    {
        $setting = Setting::where('id', $id)->first();
        return response()->json([
            'setting' => $setting
        ], 200);
    } //End Method

    public function updateSetting(Request $request, $id)
    {
        $setting = Setting::where('id', $id)->first();

        $imagePath = $request->file('logo_img')->store('setting_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $setting->update(['short_desc' => $request->short_desc,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,
            'facebook' => $request->facebook,
            'github' => $request->github,
            'copy_right' => $request->copy_right,
            'logo_img' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    public function deleteSetting($id){
        $setting = Setting::findOrFail($id);
        $setting->delete();
    }//End Method
}
