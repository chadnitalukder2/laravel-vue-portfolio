<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getPortfolio(){
        $portfolio = Portfolio::with('service')->orderBy('id', 'desc')->get();

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

        Portfolio::insert([
            'service_id' => $request->service_id,
            'title' => $request->title,
            'short_title' => $request->short_title,
            'image' =>  $imagePath,
            'created_at' => Carbon::now(),
        ]);
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
            'image' =>  $imagePath,
            'updated_at' => Carbon::now(),
        ]);
    }//End Method

    public function deletePortfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
    }//End Method
}
