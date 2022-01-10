<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
=======
use Carbon\Carbon;
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17

class VaccineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
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
=======
        DB::table('type_vaccinee')->insert([
            'name'     => 'Vaksin Tahap 1 (VP 5/L, VP 5/CVL)',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now() 
        ]);
    
        DB::table('type_vaccinee')->insert([
            'name'     => 'Vaksin Tahap 2 (Bronchhicine CAe)',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now() 
        ]);
    
        DB::table('type_vaccinee')->insert([
            'name'     => 'Vaksin Tahap 1 (Felocell 3)',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now() 
        ]);
    
        DB::table('type_vaccinee')->insert([
            'name'     => 'Vaksin Tahap 2 (Felocell 4)',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now() 
        ]);
    
        DB::table('type_vaccinee')->insert([
            'name'     => 'Vaksin Tahap 3 (Deffensor / Rabbies)',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now()  
        ]);
    }
}
    
>>>>>>> 4f6ea80115f246f41089d170d29baab21d181c17
