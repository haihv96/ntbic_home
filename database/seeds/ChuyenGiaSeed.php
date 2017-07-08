<?php

use Illuminate\Database\Seeder;

class ChuyenGiaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chuyen_gia_translations')->insert([
        [
        	'chuyen_gia_id' => '1',
        	'Ten' => 'Nguyễn A',
        	'ChucVu' => 'Cán Bộ',
        	'locale' => 'vi',
        ],
        [
        	'chuyen_gia_id' => '2',
        	'Ten' => 'Nguyễn B',
        	'ChucVu' => 'Cán Bộ',
        	'locale' => 'vi',
        ],
        [
        	'chuyen_gia_id' => '3',
        	'Ten' => 'John Legend',
        	'ChucVu' => 'Boss',
        	'locale' => 'en',
        ],
        [
        	'chuyen_gia_id' => '4',
        	'Ten' => 'Demi lovato',
        	'ChucVu' => 'Boss',
        	'locale' => 'en',
        ]
        ]);
    }
}
