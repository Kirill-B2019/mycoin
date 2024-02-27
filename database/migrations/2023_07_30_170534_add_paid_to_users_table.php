<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaidToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->integer('status_id')->nullable();;
            $table->integer('role_id');
            $table->integer('verified')->nullable();;
            $table->text('user_desc')->nullable();;
            $table->string('user_real_name')->nullable();;
            $table->string('user_last_name')->nullable();;
            $table->string('vk')->nullable();;
            $table->string('instagram')->nullable();;
            $table->string('youtube')->nullable();;
            $table->string('user_company')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
