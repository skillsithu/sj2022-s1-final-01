<?php

namespace Database\Seeders;

use App\Models\Poi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(LocationSeeder::class);
        $this->call(PoiSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(RatingSeeder::class);
    }
}
