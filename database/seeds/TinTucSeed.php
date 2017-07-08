<?php

use Illuminate\Database\Seeder;

class TinTucSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tin_tuc_translations')->insert([
        [
        	'tin_tuc_id' => '1',
        	'Ten' => 'ABC',
        	'NoiDung' => 'NTBIC có cơ sở ươm tạo tại Thị trấn Bần Yên Nhân, Mỹ Hào, Hưng Yên, cách Hà Nội gần 30km. NTBIC có văn phòng đại diện tại Hà Nội thực hiện nhiệm vụ ươm tảo ảo và duy trì mối liên hệ với các đơn vị nghiên cứu KH&CN ở Hà Nội và trong cộng đồng KH&CN',
        	'TomTat' => 'NTBIC có cơ sở ươm tạo tại Thị trấn Bần Yên Nhân, Mỹ Hào, Hưng Yên, cách Hà Nội gần 30km.',
        	'locale' => 'vi',
        ],
        [
        	'tin_tuc_id' => '2',
        	'Ten' => 'hello',
        	'NoiDung' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa học và công lập trực thuộc Viện Ứng dụng Công nghệ (Nacentech) – Bộ Khoa học và Công nghệ (Bộ KH&CN). NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'TomTat' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự ng',
        	'locale' => 'vi',
        ],
        [
        	'tin_tuc_id' => '3',
        	'Ten' => 'June',
        	'NoiDung' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        	'TomTat' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer',
        	'locale' => 'en',
        ],
        [
        	'tin_tuc_id' => '4',
        	'Ten' => 'Match',
        	'NoiDung' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
        	'TomTat' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer t',
        	'locale' => 'en',
        ]
        ]);
    }
}
