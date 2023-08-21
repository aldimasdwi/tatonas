<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('transaksi_details')->insert([
            [
                'trans_id' => 1, 
                'hardware_id' => 1, 
                'sensor_id' => 1,
                'value' => '0.5',
            ],
            [
                'trans_id' => 2, 
                'hardware_id' => 2, 
                'sensor_id' => 2,
                'value' => '701.25',
            ],
            [
                'trans_id' => 2, 
                'hardware_id' => 2, 
                'sensor_id' => 5,
                'value' => '12.1',
            ],
            [
                'trans_id' => 3, 
                'hardware_id' => 3, 
                'sensor_id' => 3,
                'value' => '27',
            ],
            [
                'trans_id' => 3, 
                'hardware_id' => 3, 
                'sensor_id' => 4,
                'value' => '10',
            ],
            [
                'trans_id' => 3, 
                'hardware_id' => 3, 
                'sensor_id' => 5,
                'value' => '12.15',
            ],
            [
                'trans_id' => 4, 
                'hardware_id' => 1, 
                'sensor_id' => 1,
                'value' => '1.5',
            ],
            [
                'trans_id' => 5, 
                'hardware_id' => 2, 
                'sensor_id' => 2,
                'value' => '750.5',
            ],
            [
                'trans_id' => 5, 
                'hardware_id' => 2, 
                'sensor_id' => 5,
                'value' => '12.3',
            ],
            [
                'trans_id' => 6, 
                'hardware_id' => 3, 
                'sensor_id' => 3,
                'value' => '25',
            ],
            [
                'trans_id' => 6, 
                'hardware_id' => 3, 
                'sensor_id' => 4,
                'value' => '8.55',
            ],
            [
                'trans_id' => 6, 
                'hardware_id' => 3, 
                'sensor_id' => 5,
                'value' => '12.05',
            ],
            [
                'trans_id' => 7, 
                'hardware_id' => 1, 
                'sensor_id' => 1,
                'value' => '0.5',
            ],
            [
                'trans_id' => 8, 
                'hardware_id' => 2, 
                'sensor_id' => 2,
                'value' => '550.75',
            ],
            [
                'trans_id' => 8, 
                'hardware_id' => 2, 
                'sensor_id' => 5,
                'value' => '12.2',
            ],
            [
                'trans_id' => 9, 
                'hardware_id' => 3, 
                'sensor_id' => 3,
                'value' => '25',
            ],
            [
                'trans_id' => 9, 
                'hardware_id' => 3, 
                'sensor_id' => 4,
                'value' => '11.3',
            ],
            [
                'trans_id' => 9, 
                'hardware_id' => 3, 
                'sensor_id' => 5,
                'value' => '12.23',
            ],
        ]);
    }
}
