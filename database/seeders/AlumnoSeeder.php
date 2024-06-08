<?php

namespace Database\Seeders;

use App\Models\ExamenFinal;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExamenFinal::factory(15)->create();
    }
}
