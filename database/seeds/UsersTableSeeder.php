<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            0=> array(
                'user_id'=>'',
                 'user_email'=>'admin',
                 'user_password'=>'21232f297a57a5a743894a0e4a801fc3',
                 'user_firstname'=>'admin',
                 'user_lastname'=>'admin',
                 'user_image'=>'',
                 'user_citizen'=>'',
                 'user_ratitng_score'=>'0',
                 'user_rating_vote'=>'0',
                 'user_status_login'=>'1',
                 'user_status_verified'=>'1',
                 'user_tel'=>'',
                 'user_role'=>'1',
             ),
            1=> array(
               'user_id'=>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'user_email'=>'t2@gmail.com',
                'user_password'=>'96e79218965eb72c92a549dd5a330112',
                'user_firstname'=>'HA',
                'user_lastname'=>'DA',
                'user_image'=>'20190511105259_5cd6efdb6d7f8.jpg',
                'user_citizen'=>'1839900459092',
                'user_ratitng_score'=>'0',
                'user_rating_vote'=>'0',
                'user_status_login'=>'1',
                'user_status_verified'=>'1',
                'user_tel'=>'0972384808',
                'user_role'=>'0',
            ),
            2=> array(
                'user_id'=>'a9UPFUeahCQkbghEopdcXMblE5a2',
                 'user_email'=>'phetklom_p@su.ac.th',
                 'user_password'=>'96e79218965eb72c92a549dd5a330112',
                 'user_firstname'=>'tewsuu',
                 'user_lastname'=>'xx',
                 'user_image'=>'',
                 'user_citizen'=>'1839900459092',
                 'user_ratitng_score'=>'0',
                 'user_rating_vote'=>'0',
                 'user_status_login'=>'1',
                 'user_status_verified'=>'0',
                 'user_tel'=>'5454544545',
                 'user_role'=>'0',
             ),
             3=> array(
                'user_id'=>'era1bnoVn8YmUDHdcdsaasHpfGl2',
                 'user_email'=>'t@gmail.com',
                 'user_password'=>'96e79218965eb72c92a549dd5a330112',
                 'user_firstname'=>'TTT',
                 'user_lastname'=>'TTT',
                 'user_image'=>'',
                 'user_citizen'=>'1839900459092',
                 'user_ratitng_score'=>'0',
                 'user_rating_vote'=>'0',
                 'user_status_login'=>'1',
                 'user_status_verified'=>'1',
                 'user_tel'=>'0972384808',
                 'user_role'=>'0',
             ),
             4=> array(
                'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                 'user_email'=>'panuwich123@gmail.com',
                 'user_password'=>'96e79218965eb72c92a549dd5a330112',
                 'user_firstname'=>'Panuwich',
                 'user_lastname'=>'Phetklom',
                 'user_image'=>'20190517064856_5cde9fa8c0fc1.jpg',
                 'user_citizen'=>'1839900459092',
                 'user_ratitng_score'=>'5',
                 'user_rating_vote'=>'1',
                 'user_status_login'=>'1',
                 'user_status_verified'=>'1',
                 'user_tel'=>'0972384808',
                 'user_role'=>'0',
             ),
             5=> array(
                'user_id'=>'unIGkqpLVWejQ3dX7w8TPqXnox53',
                 'user_email'=>'tanaree_bee@hotmail.com',
                 'user_password'=>'4cea9095b7acf2fa8371bd4fa26fc90f',
                 'user_firstname'=>'TANAREE',
                 'user_lastname'=>'OUPAYASO',
                 'user_image'=>'',
                 'user_citizen'=>'1102002782188',
                 'user_ratitng_score'=>'0',
                 'user_rating_vote'=>'0',
                 'user_status_login'=>'1',
                 'user_status_verified'=>'1',
                 'user_tel'=>'0838849236',
                 'user_role'=>'0',
             ),
             
        ));
    }
}
