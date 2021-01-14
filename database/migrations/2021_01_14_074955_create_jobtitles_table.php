<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobtitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobtitles', function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')
                    ->references('id')
                    ->on('areas')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
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
        Schema::dropIfExists('jobtitles');
    }
}
