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
        Schema::create('chain_nodes', function (Blueprint $table) {
            $table->id();
            $table->string('chainPublicKey');
            $table->json('data')->nullable();
            $table->string('nodeTime');
            $table->integer('nodeIP');
            $table->integer('nodePort');
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
        Schema::dropIfExists('chain_nodes');
    }
};
