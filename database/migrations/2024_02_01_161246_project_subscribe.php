<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProjectSubscribe extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_subscribe', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Project::class);
            $table->foreignIdFor(\App\Models\Subscribe::class);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_subscribe');
    }
}
