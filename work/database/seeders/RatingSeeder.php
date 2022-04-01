<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $towerBridgeId = \App\Models\Poi::where(["name" => "Tower Bridge"])->firstOrFail()->id;
        $londonEyeId = \App\Models\Poi::where(["name" => "London Eye"])->firstOrFail()->id;
        $theShardId = \App\Models\Poi::where(["name" => "The Shard"])->firstOrFail()->id;
        $bigBenId = \App\Models\Poi::where(["name" => "Big Ben"])->firstOrFail()->id;
//        RatingSeeder::insert([
//            [
//                "poi_id" => $towerBridgeId,
//                "rating" =>
//            ],
//        ]);

        Rating::factory()
            ->count(50)
            ->create(["poi_id" => $towerBridgeId]);

        Rating::factory()
            ->count(50)
            ->create(["poi_id" => $londonEyeId]);

        Rating::factory()
            ->count(50)
            ->create(["poi_id" => $theShardId]);
        Rating::factory()
            ->count(50)
            ->create(["poi_id" => $bigBenId]);
    }
}
