<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id');
            $table->integer('parent')->default('0');
            $table->string('name');
            $table->string('announce');
            $table->text('preview_desc')->nullable();
            $table->text('desc');
            $table->text('preview_image')->nullable();
            $table->date('start')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->date('stop')->nullable();
            $table->integer('target')->nullable();
            $table->integer('minimum_payment')->nullable();
            $table->integer('collected')->nullable();
            $table->integer('commission')->nullable();
            $table->string('owner_wallet')->nullable();
            $table->string('info_mail')->nullable();
            $table->string('site')->nullable();
            $table->string('region')->nullable();
            $table->string('vk')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->boolean('main_page')->default(0);
            $table->dateTime('published')->default(0);
            $table->integer('priced_around')->nullable();
            $table->integer('global_type')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
