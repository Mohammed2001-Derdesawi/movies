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
        Schema::create('actors_parts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('part_id');
            $table->foreign('part_id')->references('id')->on('parts')->onDelete('CASCADE');
            $table->unsignedInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('NO ACTION');
            $table->unsignedInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('NO ACTION');
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
        Schema::dropIfExists('actors_parts');
    }
};
