<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowers', function (Blueprint $table) {
            $table->bigIncrements('flower_id');
            $table->timestamps();
            $table->string('flower_name');
            $table->integer('flower_price');
            $table->integer('flower_stock');
            $table->string('flower_type');
            $table->string('flower_description');
            $table->string('flower_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flowers');
    }
}
