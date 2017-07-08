<?php

use Illuminate\Database\Seeder;

class LoaiTin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_tin')->insert([
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
