<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ventas;

class ventasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ventas::Factory(40)->create();
        //
    }
}
