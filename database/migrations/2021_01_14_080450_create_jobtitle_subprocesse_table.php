<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobtitleSubprocesseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobtitle_subprocesse', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('subprocesse_id');
            $table->foreign('subprocesse_id')
                    ->references('id')
                    ->on('subprocesses')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('jobtitle_id');
            $table->foreign('jobtitle_id')
                    ->references('id')
                    ->on('jobtitles')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->unsignedBigInteger('reponsibility_id');
            $table->foreign('reponsibility_id')
                    ->references('id')
                    ->on('reponsibilities')
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
        Schema::dropIfExists('jobtitle_subprocesse');
    }
}
