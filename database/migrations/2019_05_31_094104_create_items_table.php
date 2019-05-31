<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('user_id');
            $table->integer('event_id');
            $table->string('item_name');
            $table->integer('item_price');
            $table->integer('item_pre_rate');
            $table->integer('item_tran_rate')->nullable;
            $table->string('item_desc');
            $table->string('item_img1');
            $table->string('item_img2')->nullable;
            $table->string('item_img3')->nullable;
            $table->boolean('status');
            $table->enum('type',['1','2','3','4','5','6','7','8','9','10','11','12'])->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
