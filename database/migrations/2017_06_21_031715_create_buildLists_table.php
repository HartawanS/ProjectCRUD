<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('buildList', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idproject');
            // $table->integer('iduserlist');
            $table->string('type');
            $table->float('version');
            $table->text('note');
            $table->string('link_file_APK');
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
        Schema::dropIfExists('buildList');
    }
}
