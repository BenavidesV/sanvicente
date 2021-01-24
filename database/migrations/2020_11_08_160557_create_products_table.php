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
      $table->id();
      $table->timestamps();
      $table->string('name');
      $table->text('description');
      $table->string('keywords');
      $table->string('image')->default('/storage/images/5t2a51LSvwnu0QIdqMJKKkGAjT6vK0UVGmsqde7C.png');//->default('storage/images/qDDur4dBQdhPi1kPNdYR8ostZpU9caYr5M3oClfn.png');///storage/images/qDDur4dBQdhPi1kPNdYR8ostZpU9caYr5M3oClfn.png
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
