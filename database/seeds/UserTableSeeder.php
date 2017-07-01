<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'mcboy.v@gmail.com',
            'password' => bcrypt('123456'),
            'level' => 1
        ],
        	[
        		'username' => 'moderator',
        		'email' => 'hocvien.testmail@gmail.com',
        		'password' => bcrypt('123456');
        		'level' => 2
        	]
        );
    }
}
