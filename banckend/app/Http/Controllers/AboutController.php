<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getAbout(){
        $abouts = About::all();
        $about = About::first();
        return response()->json([
            'abouts' => $abouts,
            'about' => $about
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

        // Handle cv upload
        $cvPath = $request->file('cv')->store('cv', 'public');
        $cvPath = asset('storage/' . $cvPath);

        About::insert([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'description' => $request->description,
            'complete_project' => $request->complete_project,
            'year_experience' => $request->year_experience,
            'image' =>  $imagePath,
            'cv' =>  $cvPath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'About Data added successfully'
        ]);
    }//End Method

    public function editAbout(Request $request ,$id){
        $abouts = About::where('id', $id)->first();
        return response()->json([
            'abouts' => $abouts
        ], 200);
    }//End Method

    public function updateAbout(Request $request, $id){
        $allData = About::where('id', $id)->first();

        $imagePath = $request->file('image')->store('about_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $cvPath = $request->file('cv')->store('cv', 'public');
        $cvPath = asset('storage/' . $cvPath);

        $allData->update([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'description' => $request->description,
            'complete_project' => $request->complete_project,
            'year_experience' => $request->year_experience,
            'image' =>  $imagePath,
            'cv' =>  $cvPath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    //====================================
    public function getExperience(){
        $experiences = Experience::orderBy('id', 'desc')->get();
        return response()->json([
            'experiences' => $experiences,
        ], 200);
        return $experiences;
    } //End Method

    public function addExperience(Request $request){
        $request->validate([
            'experience' => 'required|string',
        ]);
        $imagePath = $request->file('image')->store('resume_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        Experience::insert([
            'experience' => $request->experience,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'About Data added successfully'
        ]);
    } //End Method

    public function editExperience(Request $request, $id)
    {
        $experiences = Experience::where('id', $id)->first();
        return response()->json([
            'experiences' => $experiences
        ], 200);
    } //End Method

    public function updateExperience(Request $request, $id)
    {
        $experiences = Experience::where('id', $id)->first();

        if ($request->hasFile('image')) {
            // Delete the old image
            if (file_exists(public_path($experiences->image))) {
                unlink(public_path($experiences->image));
            }
            // Store the new image
            $imagePath = $request->file('image')->store('resume_img', 'public');
            $imagePath = asset('storage/' . $imagePath);

            $experiences->image = $imagePath;
        }
        
        $experiences->update([
            'experience' => $request->experience,
            'image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    public function deleteExperience($id){
        $experience = Experience::findOrFail($id);
        $experience->delete();
    }//End Method
}
