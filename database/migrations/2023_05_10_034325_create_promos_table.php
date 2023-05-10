<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promos', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('type');
            $table->integer('value');
            $table->tinyInteger('type_of_value')->default(1)->comment('1=Percentage,0=Fixed Amount');
            $table->tinyInteger('status')->default(1)->comment('1=Active,0=Draft');
            $table->integer('min_purchase')->default(0)->comment('0=No min purchase');
            $table->boolean('purchase_once')->default(false)->comment('true->purchase once for every user, false->purchase many times');
            $table->boolean('must_login')->default(false)->comment('true->must login to use promo, false->no need to login');//only login users can use promo
            $table->integer('max_usage')->default(0)->comment('0=unlimited');
            $table->timestamp('start_date');
            $table->timestamp('end_date')->nullable()->default(null);
            $table->integer('count')->default(0);

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
        Schema::dropIfExists('promos');
    }
};
