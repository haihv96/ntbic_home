<?php

use Illuminate\Database\Seeder;

class DoiTac extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('doi_tac')->insert([
        [
        	'slug' => '1',
        	'HinhAnh' => str_random(10),
        	'loai_doi_tac_id' => '1',
        ],
        [
        	'slug' => '12',
        	'HinhAnh' => str_random(10),
        	'loai_doi_tac_id' => '2',
        ],
        [
        	'slug' => '123',
        	'HinhAnh' => str_random(10),
        	'loai_doi_tac_id' => '3',
        ],
        [
        	'slug' => '1234',
        	'HinhAnh' => str_random(10),
        	'loai_doi_tac_id' => '4',
        ]
        ]);
    }
}
