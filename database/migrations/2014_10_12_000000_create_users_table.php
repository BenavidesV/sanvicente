<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();

            $table->boolean('admin')->default(false);
            $table->timestamp('approved_at')->nullable();

            $table->string('identification')->unique();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('social_network_1')->nullable();
            $table->string('social_network_2')->nullable();
            $table->string('social_network_3')->nullable();
            $table->string('social_network_4')->nullable();

            $table->string('history')->nullable();
            $table->string('hashtag')->nullable();//identificador de busqueda

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
