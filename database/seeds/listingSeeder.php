<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class listingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = '2023-02-21 15:50:51';
        $updated_at = '2023-02-21 15:50:51';
        DB::table('Listing')->insert([
            'id'          => 1,
            'first_id'    => 0,
            'description' => 'Lista de Estados',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('Listing')->insert([
            'id'          => 2,
            'first_id'    => 0,
            'description' => 'Lista Tipo de Servicios',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('Listing')->insert([
            'first_id'    => 1,
            'description' => 'Habilitado',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('Listing')->insert([
            'first_id'    => 1,
            'description' => 'Deshabilitado',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('Listing')->insert([
            'first_id'    => 2,
            'description' => 'Básico',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('Listing')->insert([
            'first_id'    => 2,
            'description' => 'Avanzado',
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
    }
}
