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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('dob')->nullable();
            $table->string('account_number')->nullable();
            $table->enum('account_type', config('constants.account_types'))->default(config('constants.account_types')[0]);
            $table->enum('gender', config('constants.genders'))->default(config('constants.genders')[0]);
            $table->enum('status', config('constants.account_status'))->default(config('constants.account_status')[0]);
            $table->double('balance')->default(0);
            $table->string('email')->unique();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('image')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('two_factor',['active','inactive'])->default('inactive');
            $table->integer('limit')->default(0);
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
