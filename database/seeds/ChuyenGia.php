<?php

use Illuminate\Database\Seeder;

class ChuyenGia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chuyen_gia')->insert([
        [
        	'slug' => '1',
        ],
        [
        	'slug' => '12',
        ],
        [
        	'slug' => '123',
        ],
        [
        	'slug' => '1234',
        ]
        ]);
    }
}
