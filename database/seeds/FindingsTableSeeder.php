<?php

use Illuminate\Database\Seeder;

class FindingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('findings')->insert(array(
            0=> array(
                'user_id' => 'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'name' => 'huawei p30 pro',
                'descript' => 'สีเขียว',
                'location' => ' ',
                'amount' => '1',
                'image' => '20190521062800_5ce3e0c0a819f.jpg',
                'addr_id' =>'10',
            )
                              
            ));
    }
}
