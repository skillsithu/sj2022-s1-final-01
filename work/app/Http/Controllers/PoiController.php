<?php

namespace App\Http\Controllers;

use App\Http\Resources\PoiResource;
use App\Models\Poi;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    public function random()
    {
        $poi = Poi::with("images")->inRandomOrder()->limit(1)->firstOrFail();

        return new PoiResource($poi);
    }
}
