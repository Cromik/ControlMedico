<?php

use App\HistorialPaciente;
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
        // $this->call(UserSeeder::class);
        $historialPaciente = factory(HistorialPaciente::class, 10)->create();
    }
}
