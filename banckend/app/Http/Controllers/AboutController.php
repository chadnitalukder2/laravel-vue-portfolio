<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getAbout(){
        $abouts = About::all();
        return response()->json([
            'abouts' => $abouts
        ], 200);
        return $abouts;
    }//End Method

    public function addAbout(Request $request){
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required|string',
            'description' => 'required|string',
            'complete_project' => 'required|integer',
            'year_experience' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);
        $imagePath = $request->file('image')->store('about_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        About::insert([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'description' => $request->description,
            'complete_project' => $request->complete_project,
            'year_experience' => $request->year_experience,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'About Data added successfully'
        ]);
    }//End Method
}
