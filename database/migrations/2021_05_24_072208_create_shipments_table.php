<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->float('weight');
            $table->integer('pkg_num');
            $table->string('status');
            $table->dateTime('published_at');
            $table->dateTime('end_at');
            $table->string('prod_kind');
            $table->string('prod_price');
            $table->integer('way_id');
            $table->integer('from_user_id')->nullable();
            $table->integer('to_user_id')->nullable();
            $table->integer('pay_way')->nullable();
            $table->foreign('way_id')->references('id')->on('wasys')->onUpdate('cascade');
            $table->foreign('from_user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('to_user_id')->references('id')->on('clients')->onUpdate('cascade');
            $table->foreign('pay_way')->references('id')->on('pay_ways')->onUpdate('cascade');
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
        Schema::dropIfExists('shipments');
    }
}
