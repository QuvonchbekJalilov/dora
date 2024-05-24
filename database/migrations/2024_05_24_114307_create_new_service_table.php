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
        Schema::create('new_service', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_en');
            $table->string('title_ru');
            $table->text('description_uz');
            $table->text('description_en');
            $table->text('description_ru');
            $table->string('image');
            $table->string('price');
            $table->string('deadline_uz');
            $table->string('deadline_en');
            $table->string('deadline_ru');
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
        Schema::dropIfExists('new_service');
    }
};
