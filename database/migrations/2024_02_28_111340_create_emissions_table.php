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
        Schema::create('emissions', function (Blueprint $table) {
            $table->id();
            $table->string('token_name');
            $table->string('desc')->nullable();
            $table->integer('total');
            $table->string('end_point');
            $table->string('protocol');
            $table->integer('end_point_id');
            $table->string('main_net');
            $table->integer('main_net_id');
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
        Schema::dropIfExists('emissions');
    }
};
