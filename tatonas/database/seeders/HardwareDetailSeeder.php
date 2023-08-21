<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HardwareDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('hardware_details')->insert([
            [
                'hardware_id' => 1, 
                'sensor_id' => 1,   
            ],
            [
                'hardware_id' => 2, 
                'sensor_id' => 2,   
            ],
            [
                'hardware_id' => 2, 
                'sensor_id' => 5,   
            ],
            [
                'hardware_id' => 3, 
                'sensor_id' => 3,   
            ],
            [
                'hardware_id' => 3, 
                'sensor_id' => 4,   
            ],
            [
                'hardware_id' => 3, 
                'sensor_id' => 5,   
            ],
        ]);
    }
}
