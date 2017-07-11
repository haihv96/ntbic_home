<?php

use Illuminate\Database\Seeder;

class LoaiDoiTacSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('loai_doi_tac_translations')->insert([
        [
        	'loai_doi_tac_id' => '1',
        	'Ten' => 'Trung tâm ươm tạo Công nghệ và Doanh nghiệp KH&CN (NTBIC)',
        	'locale' => 'vi',
        ],
        [
        	'loai_doi_tac_id' => '2',
        	'Ten' => 'Thị trấn Bần Yên Nhân, Mỹ Hào, Hưng Yên,',
        	'locale' => 'vi',
        ],
        [
        	'loai_doi_tac_id' => '3',
        	'Ten' => 'etraset sheets containing Lorem ',
        	'locale' => 'en',
        ],
        [
        	'loai_doi_tac_id' => '4',
        	'Ten' => 'Contrary to popular belief',
        	'locale' => 'en',
        ]
        ]);
    }
}
