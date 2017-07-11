<?php

use Illuminate\Database\Seeder;

class ToChucSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('to_chuc_translations')->insert([
        [
        	'to_chuc_id' => '1',
        	'GioiThieuChung' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa ',
        	'ViTriChucNang' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa ',
        	'SuMenhTamNhin' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa ',
        	'CoCau' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'DoiNguTrungTam' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa ',
        	'locale' => 'vi',
        ],
        [
        	'to_chuc_id' => '2',
        	'GioiThieuChung' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'ViTriChucNang' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'SuMenhTamNhin' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'CoCau' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'DoiNguTrungTam' => 'NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'locale' => 'vi',
        ],
        [
        	'to_chuc_id' => '3',
        	'GioiThieuChung' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500',
        	'ViTriChucNang' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-',
        	'SuMenhTamNhin' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-',
        	'CoCau' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-',
        	'DoiNguTrungTam' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-',
        	'locale' => 'en',
        ],
        [
        	'to_chuc_id' => '4',
        	'GioiThieuChung' => 'here are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. ',
        	'ViTriChucNang' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. R',
        	'SuMenhTamNhin' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. R',
        	'CoCau' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. R',
        	'DoiNguTrungTam' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. R',
        	'locale' => 'en',
        ]
        ]);
    }
}
