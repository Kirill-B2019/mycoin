<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractivenessesProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractivenesses_projects', function (Blueprint $table) {
            $table->unsignedBigInteger('attractiveness_id');
            $table->unsignedBigInteger('project_id');
            $table->foreign('attractiveness_id')->references('id')->on('attractivenesses')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->integer('value')->default('1')->nullable();
            $table->primary(['attractiveness_id','project_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attractivenesses_projects');
    }
}
