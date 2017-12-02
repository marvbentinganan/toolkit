<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inv_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type');
            $table->integer('supplier')->nullable();
            $table->integer('manufacturer');
            $table->integer('state');
            $table->integer('ownership');
            $table->string('image')->default('default.jpg');
            $table->string('serial')->nullable();
            $table->string('model')->nullable();
            $table->string('barcode')->nullable();
            $table->string('capacity')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('remarks')->nullable();
            $table->integer('added_by');
            $table->softDeletes();
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
        Schema::dropIfExists('inv_items');
    }
}
