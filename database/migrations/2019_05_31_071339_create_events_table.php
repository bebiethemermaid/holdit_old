<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('event_id')->nullable;
            $table->string('event_img_cover')->nullable;
            $table->string('event_img_logo')->nullable;
            $table->string('event_location')->nullable;
            $table->date('event_date_start')->nullable;
            $table->date('event_date_end')->nullable;
            $table->string('event_title')->nullable;
            $table->string('event_desc')->nullable;
            $table->enum('event_category',['1','2','3','4','5','6','7','8','9','10','11','12',''])->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
