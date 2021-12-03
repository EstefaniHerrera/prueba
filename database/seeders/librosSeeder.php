<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\libros;

class librosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        libros::Factory(40)->create();
        //
    }
}
