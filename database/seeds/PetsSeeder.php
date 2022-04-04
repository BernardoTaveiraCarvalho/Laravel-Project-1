<?php

use Illuminate\Database\Seeder;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
            factory(\App\Pets::class, 100)->create();

            \DB::table('pets')->insert([
                'name'       => $arrayName[rand(0,count($arrayName)-1)],
                'birthdate'   => $arraybirthdate[rand(0,count($arraybirthdate)-1)],
                'color'=> $arrayName[rand(0,count($arrayName)-1)],
                'people_id'     => rand(1, 10)
            ]);
        }
    }
}
