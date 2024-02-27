<?php

use App\Models\Project;
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
        Schema::create('expert_opinions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->constrained('projects','id')->onDelete('cascade');
            $table->foreignIdFor(\App\Models\User::class);
            $table->text('subject')->nullable();
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
        Schema::dropIfExists('expert_opinions');
    }
};
