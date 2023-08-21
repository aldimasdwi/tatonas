<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterSensorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('master_sensors')->insert([
            [
                'sensor' => 'rf',
                'sensor_name' => 'Rainfall',
                'unit' => 'mm',
                'created_by' => 'Admin',
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'sensor' => 'wl',
                'sensor_name' => 'Water Level',
                'unit' => 'cm',
                'created_by' => 'Admin',
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'sensor' => 'ah',
                'sensor_name' => 'Air Humidity',
                'unit' => '%',
                'created_by' => 'Admin',
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'sensor' => 'ws',
                'sensor_name' => 'Wind Speed',
                'unit' => 'm/s',
                'created_by' => 'Admin',
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'sensor' => 'bt',
                'sensor_name' => 'Battery',
                'unit' => 'volt',
                'created_by' => 'Admin',
                'waktu' => '2022-11-10 16:20',
            ],
        ]);
    }
}
