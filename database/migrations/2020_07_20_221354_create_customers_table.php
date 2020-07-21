<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
	    $table->string('full_name', 100);
	    $table->string('user_name', 100);
	    $table->string('user_password', 100);
	    $table->string('address', 255);
	    $table->string('country', 200);
	    $table->string('city', 200);
	    $table->string('phone', 100);
	    $table->string('email', 255);
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
        Schema::dropIfExists('customers');
    }
}
