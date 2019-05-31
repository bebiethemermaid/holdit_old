<?php

use Illuminate\Database\Seeder;

class VerifiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { DB::table('verifies')->insert(array(
        0=> array(
            'user_id'=>'o98zEU5KYOPkAvvw9WegmRCwVDD2',
            'image'=>'20190531043627_5cf0f59bea6e5.jpg',
         ),
        ));
    }
}
