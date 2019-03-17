<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plate');
            $table->string('year');
            $table->string('model');
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('modal_id')->unsigned();;
            $table->foreign('modal_id')->references('id')->on('modals')->onDelete('no action')->onUpdate('no action');;
            $table->bigInteger('messenger_id')->unsigned();;
            $table->foreign('messenger_id')->references('id')->on('messengers')->onDelete('no action')->onUpdate('no action');
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
        Schema::dropIfExists('vehicles');
    }
}
