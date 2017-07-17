<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
        [
        	'slug' => 'to-chuc',
        ],
        [
        	'slug' => 'tin-tuc',
        ],
        [
        	'slug' => 'su-kien',
        ],
        [
        	'slug' => 'doi-tac',
        ],
        [
        	'slug' => 'du-lieu',
        ],
        [
        	'slug' => 'uom-tao',
        ],
        [
        	'slug' => 'cong-nghe',
        ],
        [
        	'slug' => 'lien-he',
        ]
        ]);
    }
}
