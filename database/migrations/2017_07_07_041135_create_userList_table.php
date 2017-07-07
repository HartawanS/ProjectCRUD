<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userList', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idproject');
            $table->integer('iduser');
            // $table->integer('idbuild');
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('type');
            $table->rememberToken();
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
        Schema::dropIfExists('userList');
    }
}
