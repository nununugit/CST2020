<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSortTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sort', function (Blueprint $table) {
            $table->id();

            $table->integer('group_gid')->unsigned();
            $table->foreign('group_gid')->references('gid')->on('groups');

            $table->dateTime('request_time')->nullable();
            
            $table->dateTime('sort_time')->nullable();

            $table->boolean('done')->default('0');

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
        Schema::dropIfExists('sort');
    }
}
