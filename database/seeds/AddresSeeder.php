<?php

use Illuminate\Database\Seeder;

class AddresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayaddress= array(
            "casa do primo","casa da prima"
        );
        $arraycity= array(
            "Porto","Lisboa"
        );
        $arraycountry= array(
            "Marrocos","Portugal"
        );
        $arraypostal_code= array(
            "4480-666","5555-222"
        );
        factory(\App\Addres::class, 100)->create();
        for($i=0;$i<50;$i++) {
            \DB::table('addres')->insert([
                'address'       => $arrayaddress[rand(0,count($arrayaddress)-1)],
                'city'   => $arraycity[rand(0,count($arraycity)-1)],
                'country_id'=> rand(1,10),
                'postal_code'=> $arraypostal_code[rand(0,count($arraypostal_code)-1)],

            ]);
        }
    }
}


