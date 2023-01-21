<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->foreign('cart_id')->references('id')->on('cart_headers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('quantity');
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
        Schema::dropIfExists('cart_details');
    }
}
