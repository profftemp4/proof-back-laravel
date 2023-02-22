<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class servicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = '2023-02-21 19:50:51';
        $updated_at = '2023-02-21 19:50:51';
        $start_date = '2023-02-21 19:50:51';
        $final_date = '2023-02-21 19:50:51';
        DB::table('services')->insert([
            'id'           => 1,
            'names'        => 'Servicio 1',
            'image_name'   => 'Servicio1.png',
            'type'         => 5,
            'start_date'   => $start_date,
            'final_date'   => $final_date,
            'Observations' => 'Observaciones Servicio 1',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
        DB::table('services')->insert([
            'id'           => 2,
            'names'        => 'Servicio 2',
            'image_name'   => 'Servicio2.png',
            'type'         => 6,
            'start_date'   => $start_date,
            'final_date'   => $final_date,
            'Observations' => 'Observaciones Servicio 2',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
        DB::table('services')->insert([
            'id'           => 3,
            'names'        => 'Servicio 3',
            'image_name'   => 'Servicio3.png',
            'type'         => 5,
            'start_date'   => $start_date,
            'final_date'   => $final_date,
            'Observations' => 'Observaciones Servicio 3',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
    }
}
