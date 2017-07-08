<?php

use Illuminate\Database\Seeder;

class SuKien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('su_kien')->insert([
        [
        	'slug' => '1',
        	'users_id' => '1',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '12',
        	'users_id' => '2',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '123',
        	'users_id' => '3',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
        [
        	'slug' => '1234',
        	'users_id' => '4',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ]
        ]);
    }
}
