<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addres', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->text('city');
            $table->foreignId('country_id') -> constrained();
            $table->text('postal_code');
            $table->timestamps();
        });
    }
    /*
     * Address
-address
-city
-country
-postal_code
     */

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addres');
    }
}
