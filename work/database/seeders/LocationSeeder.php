<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::insert([
            [
                "name" => "London",
                "country" => "England"
            ],
            [
                "name" => "Bristol",
                "country" => "England"
            ],
            [
                "name" => "Budapest",
                "country" => "Magyarország"
            ],
            [
                "name" => "Szeged",
                "country" => "Magyarország"
            ],
            [
                "name" => "Kápolnapusztai",
                "country" => "Magyarország"
            ],
            [
                "name" => "Zalaszántó",
                "country" => "Magyarország"
            ],

        ]);
    }
}
