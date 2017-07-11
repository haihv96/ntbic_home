<?php

use Illuminate\Database\Seeder;

class LoaiTinSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_tin_translations')->insert([
        [
        	'loai_tin_id' => '1',
        	'Ten' => 'Hoang A',
        	'locale' => 'vi',
        ],
        [
        	'loai_tin_id' => '2',
        	'Ten' => 'Hoàng B',
        	'locale' => 'vi',
        ],
        [
        	'loai_tin_id' => '3',
        	'Ten' => 'Tom',
        	'locale' => 'en',
        ],
        [
        	'loai_tin_id' => '4',
        	'Ten' => 'Ton',
        	'locale' => 'en',
        ]
        ]);
    }
}
