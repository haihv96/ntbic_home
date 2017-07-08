<?php

use Illuminate\Database\Seeder;

class DoiTacSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doi_tac_translations')->insert([
        [
        	'doi_tac_id' => '1',
        	'Ten' => 'Nguyễn A',
        	'NoiDung' => 'Cán Bộ',
        	'locale' => 'vi',
        ],
        [
        	'doi_tac_id' => '2',
        	'Ten' => 'Nguyễn A',
        	'NoiDung' => 'Cán Bộ',
        	'locale' => 'vi',
        ],
        [
        	'doi_tac_id' => '3',
        	'Ten' => 'Lorem Ipsum',
        	'NoiDung' => 'is simply dummy text of the printing and typesetting industry.',
        	'locale' => 'en',
        ],
        [
        	'doi_tac_id' => '4',
        	'Ten' => 'The standard chunk of Lorem Ipsum',
        	'NoiDung' => 'below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum e',
        	'locale' => 'en',
        ]
        ]);
    }
}
