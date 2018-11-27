<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // user variables:'name', 'email', 'password','phone','adress_street','adress_nr','adress_zipcode','adress_city','pays_electricity'
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->default("email@email.com");
            $table->string('password')->default("default_password");
            $table->string('phone')->default("default_phone");
            $table->string('adress_street')->default("default_street");
            $table->string('adress_nr')->default("default_nr");
            $table->string('adress_zipcode')->default("default_zipcode");
            $table->string('adress_city')->default("default_city");
            $table->boolean('pays_electricity')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
