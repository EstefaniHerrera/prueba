<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\autores;

class autoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        autores::Factory(40)->create();
        //
    }
}
