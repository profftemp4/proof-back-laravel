<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customersSeeder extends Seeder
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
        DB::table('customers')->insert([
            'id'           => 1,
            'names'        => 'Cliente 1 Apellido 1',
            'image_name'   => 'Cliente1.png',
            'document'     => 1111111111,
            'email'        => 'cliente@uno.uno',
            'phone_number' => 1010101010,
            'Observations' => 'Observaciones Cliente 1 Apellido 1',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
        DB::table('customers')->insert([
            'id'           => 2,
            'names'        => 'Cliente 2 Apellido 2',
            'image_name'   => 'Cliente2.png',
            'document'     => 2222222222,
            'email'        => 'cliente@dos.dos',
            'phone_number' => 2020202020,
            'Observations' => 'Observaciones Cliente 2 Apellido 2',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
        DB::table('customers')->insert([
            'id'           => 3,
            'names'        => 'Cliente 3 Apellido 3',
            'image_name'   => 'Cliente3.png',
            'document'     => 3333333333,
            'email'        => 'cliente@tres.tres',
            'phone_number' => 3030303030,
            'Observations' => 'Observaciones Cliente 3 Apellido 3',
            'state'        => 3,
            'created_at'   => $created_at,
            'updated_at'   => $updated_at
        ]);
        
    }
}
