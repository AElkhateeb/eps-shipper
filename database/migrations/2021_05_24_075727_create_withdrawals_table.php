<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->float('price');
            $table->jsonb('status');
            $table->boolean('in_out');
            $table->boolean('enabled')->default(true);
            $table->integer('from_id');
            $table->integer('to_id');
            $table->integer('way_id');
            $table->foreign('way_id')->references('id')->on('pay_ways')->onUpdate('cascade');
            $table->foreign('from_id')->references('id')->on('wallets')->onUpdate('cascade');
            $table->foreign('to_id')->references('id')->on('wallets')->onUpdate('cascade');
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
        Schema::dropIfExists('withdrawals');
    }
}
