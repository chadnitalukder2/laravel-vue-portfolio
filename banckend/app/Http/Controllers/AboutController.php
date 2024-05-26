<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getAbout(){
        $abouts = About::all();
        return response()->json([
            'abouts' => $abouts
        ], 200);
        return $abouts;
    }
}
