<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert(array(
            0=> array(
                'event_img_cover' => ' ',
                'event_img_logo' => ' ',
                'event_location' => ' ',
                'event_date_start' => '1000-10-04',
                'event_date_end' => '1000-10-04',
                'event_title' => ' ',
                'event_desc' => ' ',
                'event_category' =>'',
            ),
            2=> array(
                'event_img_cover' => 'testeventpic.jpg',
                'event_img_logo' => 'commartlogo.jpg',
                'event_location' => 'ไบเทค บางนา ฮอลล์',
                'event_date_start' => '2019-02-23',
                'event_date_end' => '2019-05-30',
                'event_title' => 'Connected Life',
                'event_desc' => 'งานแสดงสินค้าไอที และนวัตกรรมทางด้านเทคโนโลยีอันดับ 1 ของไทย',
                'event_category' =>'11',
                ),
                    
            3=> array(
                'event_img_cover' => 'book_fair.jpg',
                'event_img_logo' => 'book_fair_logo.jpg',
                'event_location' => 'หอสมุดพระราชวังสนามจันทร์ มหาวิทยาลัยศิลปากร',
                'event_date_start' => '2019-02-23',
                'event_date_end' => '2019-05-21',
                'event_title' => 'ทับแก้วบุ๊คแฟร์',
                'event_desc' => 'งานมหกรรมหนังสือสื่อการเรียนรู้ พบกับนักเขียนชื่อดัง สินค้าและอุปกรณ์ไอทีและการแสดงต่างๆ',
                'event_category' =>'2',
                ),     
            4=> array(
                'event_img_cover' => 'uniqlo.jpg',
                'event_img_logo' => 'uniqlologo.jpg',
                'event_location' => 'Uniqlo ทุกสาขา',
                'event_date_start' => '2019-03-23',
                'event_date_end' => '2019-05-28',
                'event_title' => 'Uniqlo',
                'event_desc' => 'ลดราคาเสื้อคอ U รุ่นสุดฮิต',
                'event_category' =>'1',
                 ),   
            5=> array(
                'event_img_cover' => 'nike.jpg',
                'event_img_logo' => 'nikelogo.jpg',
                'event_location' => 'Siam Discovery',
                'event_date_start' => '2019-03-21',
                'event_date_end' => '2019-05-28',
                'event_title' => 'Nike',
                'event_desc' => 'Nike ลดสูงสุด 30% เฉพาะสาขา Siam Discovery',
                'event_category' =>'3',
                ), 
                              
            ));
    }
}
