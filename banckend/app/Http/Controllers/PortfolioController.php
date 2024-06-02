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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',

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
    }//End Method


    public function updatePortfolio(Request $request, $id){
        $portfolio = Portfolio::where('id', $id)->first();

        $imagePath = $request->file('image')->store('portfolio_img', 'public');
        $imagePath = asset('storage/' . $imagePath);

        $portfolio->update([
            'title' => $request->title,
            'service_id' => $request->service_id,
            'short_title' => $request->short_title,
            'github_url' => $request->github_url,
            'live_url' => $request->live_url,
            'image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
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
    }//End Method
}
