<?php

use Illuminate\Database\Seeder;

class TuyenDungSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tuyen_dung_translations')->insert([
        [
        	'tuyen_dung_id' => '1',
        	'MoTa' => 'NTBIC có cơ sở ươm',
        	'NoiDungTuyenDung' => 'tại Thị trấn Bần Yên Nhân, Mỹ Hào, Hưng Yên, cách Hà Nội gần 30km. NTBIC có văn phòng đại diện tại Hà Nội thực hiện nhiệm vụ ươm tảo ảo và duy trì mối liên hệ với các đơn vị nghiên cứu KH&CN ở Hà Nội và trong cộng đồng KH&CN.',
        	'locale' => 'vi',
        ],
        [
        	'tuyen_dung_id' => '2',
        	'MoTa' => 'Cơ sở ươm tạo tại Hưng Yên của NTBIC',
        	'NoiDungTuyenDung' => 'văn phòng, bao gồm 9 phòng phục vụ công tác ươm tạo, mỗi phòng rộng khoảng 20m2. Ngoài ra, cơ sở này còn có 2 phòng hội thảo, 1 phòng lễ tân, điều hành, hỗ trợ hoạt động ươm tạo chung. Tổng diện tích sàn của vườn ươm lên đến gần 400m2, với diện tích như vậy, NTBIC sẽ cung cấp cho các khách hàng ươm tạo của mình không gian làm việc đầy đủ tiện nghi cần thiết và các hỗ trợ về đào tạo nâng cao năng lực nhằm biến các ý',
        	'locale' => 'vi',
        ],
        [
        	'tuyen_dung_id' => '3',
        	'MoTa' => 'Lorem Ipsum is simply dummy',
        	'NoiDungTuyenDung' => 'ince the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centur',
        	'locale' => 'en',
        ],
        [
        	'tuyen_dung_id' => '4',
        	'MoTa' => 'e of classical Latin literature from 45 BC, making it over 2000 years old. ',
        	'NoiDungTuyenDung' => 'since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letrase',
        	'locale' => 'en',
        ]
        ]);
    }
}
