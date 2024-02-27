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
        Schema::create('block_importants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->text('desc');
            $table->string('button_text');
            $table->string('route_name');
            $table->date('start_data')->nullable();
            $table->date('stop_data')->nullable();
            $table->integer('target')->nullable();
            $table->integer('collected')->nullable();
            $table->integer('minimum_payment')->nullable();
            $table->boolean('active')->default('1')->nullable();
            $table->text('other_desc')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_importants');
    }
};
