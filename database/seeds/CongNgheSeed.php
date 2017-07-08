<?php

use Illuminate\Database\Seeder;

class CongNgheSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cong_nghe_translations')->insert([
        [
        	'cong_nghe_id' => '1',
        	'Ten' => 'NTBIC',
        	'NoiDung'=> 'Cơ sở ươm tạo tại Hưng Yên của NTBIC vừa được sửa chữa, nâng cấp hạ tầng, mua sắm trang thiết bị văn phòng, bao gồm 9 phòng phục vụ công tác ươm tạo, mỗi phòng rộng khoảng 20m2. Ngoài ra, cơ sở này còn có 2 phòng hội thảo, 1 phòng lễ tân, điều hành, hỗ trợ hoạt động ươm tạo chung. Tổng diện tích sàn của vườn ươm lên đến gần 400m2, với diện tích như vậy, NTBIC sẽ cung cấp cho các khách hàng ươm tạo của mình không gian làm việc đầy đủ tiện nghi cần thiết và các hỗ trợ về đào tạo nâng cao năng lực nhằm biến các ý tưởng KH&CN thành các sản phẩm mẫu và thương mại hóa thành công trên thị trường.',
        	'locale' => 'vi',
        ],
        [
        	'cong_nghe_id' => '2',
        	'Ten' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ',
        	'NoiDung'=> '(NTBIC) là đơn vị sự nghiệp khoa học và công lập trực thuộc Viện Ứng dụng Công nghệ (Nacentech) – Bộ Khoa học và Công nghệ (Bộ KH&CN). NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
        	'locale' => 'vi',
        ],
        [
        	'cong_nghe_id' => '3',
        	'Ten' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        	'NoiDung'=> 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        	'locale' => 'en',
        ],
        [
        	'cong_nghe_id' => '4',
        	'Ten' => 'it is a long established fact that a reader will be distracted by the readabi',
        	'NoiDung'=> 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
        	'locale' => 'en',
        ]
        ]);
    }
}
