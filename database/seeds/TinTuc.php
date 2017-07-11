<?php

use Illuminate\Database\Seeder;

class TinTuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tin_tuc')->insert([
        [
        	'slug' => '1',
        	'loai_tin_id' => '1',
        	'users_id' => '1',
        	'HinhAnh' => str_random(10),
        ],
        [
        	'slug' => '12',
        	'loai_tin_id' => '2',
        	'users_id' => '2',
        	'HinhAnh' => str_random(10),
        ],
        [
        	'slug' => '123',
        	'loai_tin_id' => '3',
        	'users_id' => '3',
        	'HinhAnh' => str_random(10),
        ],
        [
        	'slug' => '1234',
        	'loai_tin_id' => '4',
        	'users_id' => '4',
        	'HinhAnh' => str_random(10),
        ]
        ]);
    }
}
