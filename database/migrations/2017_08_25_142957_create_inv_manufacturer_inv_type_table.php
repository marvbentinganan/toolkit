<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvManufacturerInvTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_manufacturer_inv_type', function (Blueprint $table) {
            $table->integer('inv_manufacturer_id')->unsigned()->index();
            $table->foreign('inv_manufacturer_id')->references('id')->on('inv_manufacturers')->onDelete('cascade');
            $table->integer('inv_type_id')->unsigned()->index();
            $table->foreign('inv_type_id')->references('id')->on('inv_types')->onDelete('cascade');
            $table->primary(['inv_manufacturer_id', 'inv_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inv_manufacturer_inv_type');
    }
}
