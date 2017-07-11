<?php

use Illuminate\Database\Seeder;

class TuyenDung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tuyen_dung')->insert([
        [
        	'slug' => '1',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '12',
        	
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '123',
        	
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '1234',
        	
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ]
        ]);
    }
}
