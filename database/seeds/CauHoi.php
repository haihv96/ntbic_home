<?php

use Illuminate\Database\Seeder;

class CauHoi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi')->insert([
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
        ],
        [
        	'slug' => '12345',
        ],
        [
        	'slug' => '123456',
        ],
        [
        	'slug' => '1234567',
        ],
        [
        	'slug' => '12345678',
        ]]
        );
    }
}
