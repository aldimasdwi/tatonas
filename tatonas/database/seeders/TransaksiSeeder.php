<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('transaksis')->insert([
            [
                'hardware_id' => 1, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 1, 
                'waktu' => '2022-11-08 16:20',
            ],
            [
                'hardware_id' => 2, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 2, 
                'waktu' => '2022-11-08 16:20',
            ],
            [
                'hardware_id' => 3, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 3, 
                'waktu' => '2022-11-08 16:20',
            ],
            [
                'hardware_id' => 1, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 1, 
                'waktu' => '2022-11-09 16:20',
            ],
            [
                'hardware_id' => 2, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 2, 
                'waktu' => '2022-11-09 16:20',
            ],
            [
                'hardware_id' => 3, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 3, 
                'waktu' => '2022-11-09 16:20',
            ],
            [
                'hardware_id' => 1, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 1, 
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'hardware_id' => 2, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 2, 
                'waktu' => '2022-11-10 16:20',
            ],
            [
                'hardware_id' => 3, 
                'parameter' => 'Parameter 1',
                'created_by_id' => 3, 
                'waktu' => '2022-11-10 16:20',
            ],
            
            
        ]);
    }
}
