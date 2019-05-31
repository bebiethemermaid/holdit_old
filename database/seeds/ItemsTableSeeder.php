<?php

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(array(
            0=> array(
              
                'user_id'=>'unIGkqpLVWejQ3dX7w8TPqXnox53',
                'event_id'=>'36',
                'item_name'=>'เสื้อยืดคอ U',
                'item_price'=>'390',
                'item_pre_rate'=>'50',
                'item_tran_rate'=>'20',
                'item_desc'=>'สีเหลืองมัสตาร์ท',
                'item_img1'=>'20190516064230_5cdd4ca687cee.jpg',
                'item_img2'=>'20190516064230_5cdd4ca688378.jpg',
                'item_img3'=>' ',
                'status'=>'1',
                'type'=>'1',
            ),
            1=> array(
             
                'user_id'=>'unIGkqpLVWejQ3dX7w8TPqXnox53',
                'event_id'=>'36',
                'item_name'=>'เสื้อยืดคอ U',
                'item_price'=>'390',
                'item_pre_rate'=>'50',
                'item_tran_rate'=>'20',
                'item_desc'=>'oversize สีน้ำเงินดำ',
                'item_img1'=>'20190516064312_5cdd4cd07c524.jpg',
                'item_img2'=>'20190516064312_5cdd4cd07cac2.jpg',
                'item_img3'=>' ',
                'status'=>'1',
                'type'=>'1',
            ),
            2=> array(
              
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'37',
                'item_name'=>'Nike air force1',
                'item_price'=>'2750',
                'item_pre_rate'=>'100',
                'item_tran_rate'=>'100',
                'item_desc'=>'size 9.5uk color white',
                'item_img1'=>'20190516064453_5cdd4d35a14ee.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'1',
                'type'=>'1',
            ),
            3=> array(
            
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'36',
                'item_name'=>'เสื้อยืด Uniqlo ใหม่',
                'item_price'=>'390',
                'item_pre_rate'=>'50',
                'item_tran_rate'=>'0',
                'item_desc'=>'oversize คอ U ส่งฟรี',
                'item_img1'=>'20190517071536_5cdea5e8ae074.jpg',
                'item_img2'=>'20190517071536_5cdea5e8ae7f1.jpg',
                'item_img3'=>' ',
                'status'=>'1',
                'type'=>'1',
            ),
            4=> array(
               
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'0',
                'item_name'=>'Nike air force1',
                'item_price'=>'3000',
                'item_pre_rate'=>'150',
                'item_tran_rate'=>'150',
                'item_desc'=>'white 10uk',
                'item_img1'=>'20190518100926_5ce02026e34c5.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'0',
                'type'=>'1',
            ),
            5=> array(
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'0',
                'item_name'=>'Nike air force1',
                'item_price'=>'3000',
                'item_pre_rate'=>'150',
                'item_tran_rate'=>'150',
                'item_desc'=>'white 10uk',
                'item_img1'=>'20190518100926_5ce02026e34c5.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'0',
                'type'=>'1',
            ),
            6=> array(
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'0',
                'item_name'=>'test',
                'item_price'=>'390',
                'item_pre_rate'=>'50',
                'item_tran_rate'=>'50',
                'item_desc'=>'dddd',
                'item_img1'=>'20190519102221_5ce174adde936.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'0',
                'type'=>'1',
            ),
            7=> array(
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'event_id'=>'0',
                'item_name'=>'test',
                'item_price'=>'390',
                'item_pre_rate'=>'20',
                'item_tran_rate'=>'20',
                'item_desc'=>'test',
                'item_img1'=>'20190519102456_5ce17548354b8.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'0',
                'type'=>'1',
            ),
            8=> array(
                'user_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'event_id'=>'37',
                'item_name'=>'nike air force1',
                'item_price'=>'2800',
                'item_pre_rate'=>'150',
                'item_tran_rate'=>'150',
                'item_desc'=>'black',
                'item_img1'=>'20190522011516_5ce4e8f43b42f.jpg',
                'item_img2'=>' ',
                'item_img3'=>' ',
                'status'=>'1',
                'type'=>'1',
            )
            ));
    }
}
