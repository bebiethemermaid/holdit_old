<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('orders')->insert(array(
            0=> array(
               
                'seller_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'buyer_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'item_id'=>'22',
                'addr_id'=>'12',
                'amount'=>'1',
                'total'=>'2700',
                'date'=>'2019-05-19 22:05:46',
                'status'=>'3',
                'track'=>'',
            ),
            1=> array(
               
                'seller_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'buyer_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'item_id'=>'22',
                'addr_id'=>'12',
                'amount'=>'1',
                'total'=>'2700',
                'date'=>'2019-05-19 22:05:56',
                'status'=>'0',
                'track'=>'',
            ),
            2=> array(
              
                'seller_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'buyer_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'item_id'=>'22',
                'addr_id'=>'12',
                'amount'=>'1',
                'total'=>'2700',
                'date'=>'2019-05-19 22:16:32',
                'status'=>'0',
                'track'=>'',
            ),
            3=> array(
             
                'seller_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'buyer_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'item_id'=>'38',
                'addr_id'=>'10',
                'amount'=>'2',
                'total'=>'860',
                'date'=>'2019-05-19 22:25:09',
                'status'=>'2',
                'track'=>'THTESTTRACK',
            ),
            ));
    
}
}