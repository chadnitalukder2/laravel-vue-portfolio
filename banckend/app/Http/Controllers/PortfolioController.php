<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfoliomultiImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PortfolioController extends Controller
{
    public function getPortfolio(Request $request){
        $queryParams = Arr::get($request, 'filter', []);

        $portfolio = Portfolio::with('service')
            ->when(isset($queryParams['service_id']), function ($query) use ($queryParams) {
                return $query->where('service_id', $queryParams['service_id']);
            })
            ->get();

        return response()->json([
            'portfolio' => $portfolio
        ], 200);
        return $portfolio;
    }//end Method

    public function addPortfolio(Request $request){
        $request->validate([
            'title' => 'required|string',
            'short_title' => 'required|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
            'multi_image.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif'
        ]);
        $imagePath = $request->file('image')->store('portfolio_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $portfolio = Portfolio::create([
                    'service_id' => $request->service_id,
                    'title' => $request->title,
                    'short_title' => $request->short_title,
                    'github_url' => $request->github_url,
                    'live_url' => $request->live_url,
                    'image' =>  $imagePath,
                    'created_at' => Carbon::now(),
                ]);

        // Store multiple images
        $images = $request->file('multi_image');
        foreach ($images as $img) {
            $multiImagePath = $img->store('multi_img', 'public');
            $multiImagePath = asset('storage/' . $multiImagePath);

            PortfoliomultiImage::insert([
                'portfolio_id' => $portfolio->id,
                'multi_image' => $multiImagePath,
                'created_at' => Carbon::now(),
            ]);
        }
        return response()->json([
            // 'newProduct' => $newProduct
            'message' => 'Portfolio Data added successfully'
        ]);
    }//End Method
    
    public function editPortfolio($id){
        $portfolio = Portfolio::with('service')->where('id', $id)->first();
        return response()->json([
            'portfolio' => $portfolio
        ], 200);
    } //End Method


    public function updatePortfolio(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Validate the request
        // $request->validate([
        //     'title' => 'required|string',
        //     'short_title' => 'required|string',
        //     'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        //     'multi_image.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif'
        // ]);

        // Update the main portfolio image if a new one is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            if (file_exists(public_path($portfolio->image))) {
                unlink(public_path($portfolio->image));
            }
            // Store the new image
            $imagePath = $request->file('image')->store('portfolio_img', 'public');
            $imagePath = asset('storage/' . $imagePath);

            $portfolio->image = $imagePath;
        }

        // Update other portfolio fields
        $portfolio->title = $request->title;
        $portfolio->service_id = $request->service_id;
        $portfolio->short_title = $request->short_title;
        $portfolio->github_url = $request->github_url;
        $portfolio->live_url = $request->live_url;
        $portfolio->updated_at = Carbon::now();
        $portfolio->save();

        // Handle multi-image updates
        if ($request->hasFile('multi_image')) {
            // Get existing multi-images
            $existingImages = PortfoliomultiImage::where('portfolio_id', $id)->get();

            // Delete existing images if needed
            foreach ($existingImages as $existingImage) {
                if (file_exists(public_path($existingImage->multi_image))) {
                    unlink(public_path($existingImage->multi_image));
                }
                $existingImage->delete();
            }

            // Store new multi-images
            $images = $request->file('multi_image');
            foreach ($images as $img) {
                $multiImagePath = $img->store('multi_img', 'public');
                $multiImagePath = asset('storage/' . $multiImagePath);

                PortfoliomultiImage::create([
                    'portfolio_id' => $portfolio->id,
                    'multi_image' => $multiImagePath,
                    'created_at' => Carbon::now(),
                ]);
            }
        }

        return response()->json([
            'message' => 'Portfolio updated successfully'
        ], 200);
    }//End Method


    public function deletePortfolio($id){
        // Retrieve the portfolio and throw an exception if not found
        $portfolio = Portfolio::findOrFail($id);

        // Retrieve and delete the associated multi images first
        $multiImages = PortfoliomultiImage::where('portfolio_id', $id)->get();
        foreach ($multiImages as $image) {
            $image->delete();
        }

        // Delete the portfolio
        $portfolio->delete();
    } //End Method


    //==========================================

    public function getMultiImage()
    {
        $multi_images = PortfoliomultiImage::orderBy('id', 'desc')->get();

        return response()->json([
            'multi_images' => $multi_images,
        ], 200);
    } //End Method

    public function deleteImage($id)
    {
        $image = PortfoliomultiImage::findOrFail($id);
        $image->delete();
    } //

    public function editImage($id)
    {
        $image = PortfoliomultiImage::where('id', $id)->first();
        return response()->json([
            'image' => $image
        ], 200);
    } //End Method

    public function updateImage(Request $request, $id)
    {
        $services = PortfoliomultiImage::where('id', $id)->first();

        $imagePath = $request->file('multi_image')->store('multi-img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $services->update([
            'multi_image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method


}
