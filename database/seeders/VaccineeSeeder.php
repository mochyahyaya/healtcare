<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VaccineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vaccinee')->insert(
            [
                'name'          => 'Vaksin Tahap 1 (VP 5/L, VP 5/CVL)',
        ]);
        DB::table('vaccinee')->insert(
            [
                'name'          => 'Vaksin Tahap 2 (Bronchhicine CAe)',
        ]);
        DB::table('vaccinee')->insert(
            [
                'name'          => 'Vaksin Tahap 3 (Deffensor / Rabbies)',
        ]);
        DB::table('vaccinee')->insert(
            [
                'name'          => 'Vaksin Tahap 1 (Felocell 3)',
        ]);
        DB::table('vaccinee')->insert(
            [
                'name'          => 'Vaksin Tahap 2 (Felocell 4)',
        ]);
    }
}
