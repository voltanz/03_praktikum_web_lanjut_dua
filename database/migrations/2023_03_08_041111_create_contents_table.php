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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 100)->index()->nullable();
            $table->string('full_name', 100)->index()->nullable();
            $table->string('short_name', 100)->index()->nullable();
            $table->string('absen', 100)->index()->nullable();
            $table->string('class', 50)->index()->nullable();
            $table->string('prodi', 100)->index()->nullable();
            $table->string('jurusan', 100)->index()->nullable();
            $table->string('kampus', 100)->index()->nullable();
            $table->string('email', 100)->index()->nullable();
            $table->string('nohp', 20)->index()->nullable();
            $table->string('ig', 50)->index()->nullable();
            $table->text('story')->index()->nullable();
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
        Schema::dropIfExists('contents');
    }
};
