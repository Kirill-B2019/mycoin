<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLetterIndicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_indices', function (Blueprint $table) {
            $table->id();
            $table->string('index_name');
            $table->integer('range_start');
            $table->integer('range_stop')->nullable();
            $table->text('desc')->nullable();
            $table->integer('used')->default('1')->nullable();
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
        Schema::dropIfExists('letter_indices');
    }
}
