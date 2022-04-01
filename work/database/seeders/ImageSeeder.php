<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Poi;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $towerBridgeId = Poi::where(["name" => "Tower Bridge"])->firstOrFail()->id;
        $londonEyeId = Poi::where(["name" => "London Eye"])->firstOrFail()->id;
        $theShardId = Poi::where(["name" => "The Shard"])->firstOrFail()->id;
        $bigBenId = Poi::where(["name" => "Big Ben"])->firstOrFail()->id;


        // Tower Bridge

        Image::create([
            "title" => "Kilátás a hídról",
            "poi_id" => $towerBridgeId,
            "path" => "img/poi/tower-bridge/tb-04.png",
            "order" => 4,
        ]);

        Image::create([
            "title" => "Címer a híd villanyoszlopán",
            "poi_id" => $towerBridgeId,
            "path" => "img/poi/tower-bridge/tb-03.png",
            "order" => 3,
        ]);

        Image::create([
            "title" => "A Tower Bridge látképe a Temze déli partjáról.",
            "poi_id" => $towerBridgeId,
            "path" => "img/poi/tower-bridge/tb-01.png",
            "order" => 1,
        ]);

        Image::create([
            "title" => "Tower Bridge - Belső nézet",
            "poi_id" => $towerBridgeId,
            "path" => "img/poi/tower-bridge/tb-02.png",
            "order" => 2,
        ]);

        // London Eye

        Image::create([
            "title" => "Egy kapszula közelről",
            "poi_id" => $londonEyeId,
            "path" => "img/poi/london-eye/london-eye-04.png",
            "order" => 4,
        ]);

        Image::create([
            "title" => "Kapszulák alul nézetben",
            "poi_id" => $londonEyeId,
            "path" => "img/poi/london-eye/london-eye-01.png",
            "order" => 1,
        ]);

        Image::create([
            "title" => "A London Eye éjszakai díszkivilágításban",
            "poi_id" => $londonEyeId,
            "path" => "img/poi/london-eye/london-eye-02.png",
            "order" => 2,
        ]);

        Image::create([
            "title" => "A London Eye napnyugtakor",
            "poi_id" => $londonEyeId,
            "path" => "img/poi/london-eye/london-eye-03.png",
            "order" => 3,
        ]);

        // Big Ben

        Image::create([
            "title" => "Big Ben és a Parlament napnyugtakor",
            "poi_id" => $bigBenId,
            "path" => "img/poi/big-ben/big-ben-04.png",
            "order" => 4,
        ]);

        Image::create([
            "title" => "Az óra közelről",
            "poi_id" => $bigBenId,
            "path" => "img/poi/big-ben/big-ben-01.png",
            "order" => 1,
        ]);

        Image::create([
            "title" => "Big Ben egy piros telefonfülkével az előtérben",
            "poi_id" => $bigBenId,
            "path" => "img/poi/big-ben/big-ben-03.png",
            "order" => 3,
        ]);

        Image::create([
            "title" => "Big Ben és a London bridge az előtérben",
            "poi_id" => $bigBenId,
            "path" => "img/poi/big-ben/big-ben-02.png",
            "order" => 2,
        ]);


        // The Shard

        Image::create([
            "title" => "A The Shard éjszakai fényei",
            "poi_id" => $theShardId,
            "path" => "img/poi/the-shard/the-shard-03.png",
            "order" => 4,
        ]);

        Image::create([
            "title" => "Az épület egy távolabbi utcáról",
            "poi_id" => $theShardId,
            "path" => "img/poi/the-shard/the-shard-01.png",
            "order" => 2,
        ]);

        Image::create([
            "title" => "Légi felvétel: The Shard",
            "poi_id" => $theShardId,
            "path" => "img/poi/the-shard/the-shard-02.png",
            "order" => 1,
        ]);

        Image::create([
            "title" => "The Shard a Tower Bridgeről nézve",
            "poi_id" => $theShardId,
            "path" => "img/poi/the-shard/the-shard-04.png",
            "order" => 3,
        ]);

    }
}
