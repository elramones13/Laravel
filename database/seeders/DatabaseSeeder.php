<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Piloto;
use App\Models\Vuelo;
use App\Models\Pasaje;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Piloto::factory()->count(25)->create();
        Vuelo::factory()->count(100)->create();
        Pasaje::factory()->count(1000)->create();
    }
}
