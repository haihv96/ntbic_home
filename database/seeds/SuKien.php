<?php

use Illuminate\Database\Seeder;

class SuKien extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('su_kien')->insert([
        [
        	'slug' => 'kinh-nghiem-khoi-nghiep-va-phat-trien-doanh-nghiep',
        	'users_id' => '1',
        	'NgayBatDau' => '2017-06-26',
        	'NgayKetThuc' => '2017-06-26',
        ],
         [
            'slug' => 'kinh-nghiem-khoi-nghiep-va-phat-trien-doanh-nghiep',
            'users_id' => '1',
            'NgayBatDau' => '2017-06-26',
            'NgayKetThuc' => '2017-06-26',
        ],
         [
            'slug' => 'kinh-nghiem-khoi-nghiep-va-phat-trien-doanh-nghiep',
            'users_id' => '1',
            'NgayBatDau' => '2017-06-26',
            'NgayKetThuc' => '2017-06-26',
        ],
         [
            'slug' => 'kinh-nghiem-khoi-nghiep-va-phat-trien-doanh-nghiep',
            'users_id' => '1',
            'NgayBatDau' => '2017-06-26',
            'NgayKetThuc' => '2017-06-26',
        ]       
        ]);
    }
}
