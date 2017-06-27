<?php

use Illuminate\Database\Seeder;

class TochucTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('to_chuc')->insert([
        	'gioi_thieu_chung'=>'',
        	'vi_tri_chuc_nang'=>'',
        	'su_menh_tam_nhin'=>'',
        	'co_cau'=>'',
        	'doi_ngu_trung_tam'=>'',
        ]);
    }
}
