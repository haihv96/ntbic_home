<?php

use Illuminate\Database\Seeder;

class LoaiDoiTac extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_doi_tac')->insert([
        [
        	'slug' => 'to-chuc',
            'menu_id' => '4',
        ],
        [
        	'slug' => 'doanh-nghiep',
            'menu_id' => '4',
        ],
        [
        	'slug' => 'ca-nhan',
            'menu_id' => '4',
        ]
        ]);
    }
}
