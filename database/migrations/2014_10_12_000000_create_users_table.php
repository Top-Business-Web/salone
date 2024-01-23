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
        if(!Schema::hasTable('users')){
            Schema::create('users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('user_phone');
                $table->string('name');
                $table->string('firstname')->nullable();
                $table->string('lastname')->nullable();
                $table->string('image')->nullable();
                $table->string('email')->unique();
                $table->integer('otp')->nullable();
                $table->string('facebook_id')->nullable();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->string('device_id')->nullable();
                $table->integer('wallet_credits')->default(0);
                $table->integer('rewards')->default(0);
                $table->integer('phone_verified')->default(0);
                $table->string('referral_code')->nullable();
                $table->rememberToken();
                $table->integer('block')->default(0);
                $table->string('lat')->nullable();
                $table->string('lon')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        } else {
            // This mean user has already an old version of GoFresha
            
        }
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
