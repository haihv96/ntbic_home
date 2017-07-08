<?php

use Illuminate\Database\Seeder;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
        	'name' => 'A',
        	'email' => str_random(10).'@gmail.com',
        	'username' => 'helloA',
        	'password' => '123',
        	'level' => '2',
        	'verified' => '1',
        	'hinh_anh' => str_random(10),
        ],
        [
        	'name' => 'B',
        	'email' => str_random(10).'@gmail.com',
        	'username' => 'helloB',
        	'password' => '123',
        	'level' => '2',
        	'verified' => '1',
        	'hinh_anh' => str_random(10),
        ],
        [
        	'name' => 'C',
        	'email' => str_random(10).'@gmail.com',
        	'username' => 'helloC',
        	'password' => '123',
        	'level' => '2',
        	'verified' => '1',
        	'hinh_anh' => str_random(10),
        ],
        [
        	'name' => 'D',
        	'email' => str_random(10).'@gmail.com',
        	'username' => 'helloD',
        	'password' => '123',
        	'level' => '2',
        	'verified' => '1',
        	'hinh_anh' => str_random(10),
        ]
        ]);
    }
}
