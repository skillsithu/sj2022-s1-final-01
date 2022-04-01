<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "date" => "required",
            "passengers" => "integer|min:1",
            "extra_baggage" => "boolean",
            "transportation" => "required",
        ]);

        $booking = Booking::create($data);
        $booking->save();
        return response()
        ->json(['data' =>  $booking]);
    }
}
