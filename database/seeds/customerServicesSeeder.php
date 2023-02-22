<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class customerServicesSeeder extends Seeder
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
        DB::table('customer_services')->insert([
            'id'          => 1,
            'customer_Id' => 1,
            'service_Id'  => 1,
            'state'       => 3,
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('customer_services')->insert([
            'id'          => 2,
            'customer_Id' => 1,
            'service_Id'  => 2,
            'state'       => 3,
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('customer_services')->insert([
            'id'          => 3,
            'customer_Id' => 2,
            'service_Id'  => 1,
            'state'       => 3,
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('customer_services')->insert([
            'id'          => 4,
            'customer_Id' => 2,
            'service_Id'  => 2,
            'state'       => 3,
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
        DB::table('customer_services')->insert([
            'id'          => 5,
            'customer_Id' => 3,
            'service_Id'  => 3,
            'state'       => 3,
            'created_at'  => $created_at,
            'updated_at'  => $updated_at
        ]);
    }
}
