<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            "poi_id" => "required|numeric",
            "rating" => "required|numeric",
        ]);

        $poi = Poi::findOrFail($data["poi_id"]);

        $rating = Rating::create($data);
        $rating->save();

        $poi = Poi::findOrFail($data["poi_id"]);

        return response()
            ->json(['data' =>  $poi->ratings()->avg("rating")]);


    }
}
