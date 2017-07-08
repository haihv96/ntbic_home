<?php

use Illuminate\Database\Seeder;

class CongNghe extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cong_nghe')->insert([
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
