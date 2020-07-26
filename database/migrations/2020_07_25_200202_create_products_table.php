<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
	  $table->string('sku', 10)->primary();
	  $table->string('name', 140)->index('name');
	  $table->string('description', 200);
	  $table->double('buy_price')->index();
	  $table->double('sell_price')->index();
	  $table->string('picture', 255);
	  $table->integer('stock')->index();

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
        Schema::dropIfExists('products');
    }
}
