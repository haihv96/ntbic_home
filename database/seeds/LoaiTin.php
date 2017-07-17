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
        	'slug' => 'cong-nghe',
            'menu_id' => '2',
        ],
        [
        	'slug' => 'khoi-nghiep',
            'menu_id' => '2',
        ],
        [
        	'slug' => 'doanh-nghiep',
            'menu_id' => '2',
        ]
        ]);
    }
}
