<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGearTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gear_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gear_id');
            $table->string('name', 50);
            $table->string('locale')->index();
            $table->unique(['gear_id', 'locale']);
            $table->foreign('gear_id')->references('id')->on('gears')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gear_translations');
    }
}
