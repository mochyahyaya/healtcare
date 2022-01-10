<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
<<<<<<< HEAD
            RoleSeeder::class,
            UserSeeder::class,
            TypeCageSeeder::class,
            TypePetSeeder::class,
            VaccineeSeeder::class
=======
            // RoleSeeder::class,
            // UserSeeder::class,
            // TypeCageSeeder::class,
            // TypePetSeeder::class,
            VaccineeSeeder::class,
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
        ]);
    }
}
