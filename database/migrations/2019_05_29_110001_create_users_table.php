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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id')->nullable;
            $table->string('user_email');
            $table->string('user_password');
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_image')->nullable;
            $table->string('user_citizen')->nullable;
            $table->string('user_ratitng_score');
            $table->string('user_rating_vote');
            $table->string('user_status_login');
            $table->string('user_status_verified');
            $table->string('user_tel')->nullable;
            $table->string('user_role');
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
