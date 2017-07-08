<?php

use Illuminate\Database\Seeder;

class CauHoiThuongGapSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hoi_translations')->insert([
        [
        	'cau_hoi_id' => '1',
            'CauHoi' => 'NTBIC có cơ sở ươm tạo tại Thị trấn Bần Yên Nhân, Mỹ Hào, Hưng Yên, cách Hà Nội gần 30km',
            'CauTraLoi' => 'NTBIC có văn phòng đại diện tại Hà Nội thực hiện nhiệm vụ ươm tảo ảo và duy trì mối liên hệ với các đơn vị nghiên cứu KH&CN ở Hà Nội và trong cộng đồng KH&CN.',
            'locale' => 'vi',
        ],
        [
        	'cau_hoi_id' => '2',
            'CauHoi' => 'Trung tâm Ươm tạo Công nghệ và Doanh nghiệp Khoa học Công nghệ (NTBIC) là đơn vị sự nghiệp khoa học và công lập trực thuộc Viện Ứng dụng Công nghệ (Nacentech)',
            'CauTraLoi' => 'Bộ Khoa học và Công nghệ (Bộ KH&CN). NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
            'locale' => 'vi',
        ],
        [
        	'cau_hoi_id' => '3',
            'CauHoi' => 'Cơ sở ươm tạo tại Hưng Yên của NTBIC',
            'CauTraLoi' => 'Bộ Khoa học và Công nghệ (Bộ KH&CN). NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
            'locale' => 'vi',
        ],
        [
        	'cau_hoi_id' => '4',
            'CauHoi' => 'NTBIC đang tạo môi trường thuận lợi cho các doanh nghiệp khởi nghiệp, các doanh nghiệp công nghệ mới thành lập',
            'CauTraLoi' => 'Bộ Khoa học và Công nghệ (Bộ KH&CN). NTBIC được thành lập vào năm 2014 với nhiệm vụ chính là hỗ trợ  việc thành lập các doanh nghiệp khởi nghiệp và phát triển lớn mạnh trên thị trường. Đạt được mục tiêu đề ra này, NTBIC sẽ góp phần tạo công ăn việc làm cho người lao động, giúp tăng trưởng kinh tế trong khu vực.',
            'locale' => 'vi',
        ],
        [
        	'cau_hoi_id' => '5',
            'CauHoi' => 'Lorem Ipsum is simply dummy text of the printin',
            'CauTraLoi' => 'nd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unch',
            'locale' => 'en',
        ],
        [
        	'cau_hoi_id' => '6',
            'CauHoi' => 'Where does it come from?',
            'CauTraLoi' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
            'locale' => 'en',
        ],
        [
        	'cau_hoi_id' => '7',
            'CauHoi' => 'Where can I get some?',
            'CauTraLoi' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour',
            'locale' => 'en',
        ],
        [
        	'cau_hoi_id' => '8',
            'CauHoi' => 'Why do we use it?',
            'CauTraLoi' => ' Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using , making it look like re',
            'locale' => 'en',
        ]
        ]);
    }
}
