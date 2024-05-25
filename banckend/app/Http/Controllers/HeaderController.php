<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function getHeaderData(){
        $allData = Header::all();

        return response()->json([
            'allData' => $allData
        ], 200);
        return $allData;
    }//End Method

    public function addHeaderData(Request $request){
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required|string',
            'short_desc' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $imagePath = $request->file('image')->store('header_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        Header::insert([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'short_desc' => $request->short_desc,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),            
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Header Data added successfully'
        ]);
    }//End Method
}
