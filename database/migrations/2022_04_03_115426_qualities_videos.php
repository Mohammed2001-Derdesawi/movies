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
        Schema::create('qualities_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('quality_id');
            $table->foreign('quality_id')->references('id')->on('qualities')->onDelete('NO ACTION');
            $table->unsignedInteger('video_id');
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('CASCADE');

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
        //
    }
};
