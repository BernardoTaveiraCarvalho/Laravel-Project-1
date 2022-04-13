<?php

use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Person::class,100)-> create();

$arrayName= array(
     "Maria","Antonio"
);
$arrayEmail= array(
    "Maria","Antonio"
);
$arraybirthdate= array(
   new DateTime("22-09-2003") ,new DateTime("25-09-2003")
);

        for($i=0;$i<50;$i++) {
            \DB::table('people')->insert([

                'name' => $arrayName[rand(0,count($arrayName)-1)],

                'email' => $arrayEmail[rand(0,count($arrayEmail)-1)],

                'birthdate' => $arraybirthdate[rand(0,count($arraybirthdate)-1)],
                'addres_id'     => rand(1, 10)
            ]);
        }
    }
}
