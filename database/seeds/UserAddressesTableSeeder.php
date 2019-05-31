<?php

use Illuminate\Database\Seeder;

class UserAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_addresses')->insert(array(
            0=> array(
             
                'name' =>'Panuwich Phetklom',
                'user_id' =>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'postcode' =>'73000',
                'province' =>'Nakhon Pathom',
                'district' =>'Muang Nakhon Pathom',
                'address' =>'191/1 room404 bansuanresort',
                'tel' =>'0972384808',
                'addr_default' =>'1',
             ),
             1=> array(
               
                'name' =>'test naja',
                'user_id' =>'era1bnoVn8YmUDHdcdsaasHpfGl2',
                'postcode' =>'37110',
                'province' =>'Amnat Charoen',
                'district' =>'Phathumratvongsa',
                'address' =>'eiei',
                'tel' =>'1234567890',
                'addr_default' =>'1',
             ),
             2=> array(
                
                'name' =>'Ha Da',
                'user_id' =>'3gg17ypBUlT8SOacCacfKI2xFA32',
                'postcode' =>'83000',
                'province' =>'Phuket',
                'district' =>'Muang Phuket',
                'address' =>'blah blah',
                'tel' =>'1234567890',
                'addr_default' =>'1',
             ),
             3=> array(
               
                'name' =>'ธนารีย์ อุปยโส',
                'user_id' =>'unIGkqpLVWejQ3dX7w8TPqXnox53',
                'postcode' =>'10230',
                'province' =>'Bangkok',
                'district' =>'Khanna Yao',
                'address' =>'39 กาญจนาภิเษก07/1 แขวงคันนายาว',
                'tel' =>'0838849236',
                'addr_default' =>'1',
             ),
             4=> array(
                
                'name' =>'ภาณุวิชญ์ เพ็ชรกลม',
                'user_id' =>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
                'postcode' =>'10260',
                'province' =>'Bangkok',
                'district' =>'Bang Na',
                'address' =>'test',
                'tel' =>'0972384808',
                'addr_default' =>'0',
             ),
             
            ));
    }
}
