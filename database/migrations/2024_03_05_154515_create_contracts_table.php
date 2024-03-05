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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('adress')->comment('Адрес в системе');
            $table->string('parent_adress')->comment('Родительский контракт');
            $table->string('version')->comment('Версия контракта ');
            $table->integer('confirmations')->default(0)->comment('Подтверждения');
            $table->json('criteria')->comment('Блок критериев в формате json');
            $table->json('execute')->comment('Блок условий в формате json');
            $table->boolean('active')->default(1)->comment('Активен - 1 ; нет - 0');
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
        Schema::dropIfExists('contracts');
    }
};
