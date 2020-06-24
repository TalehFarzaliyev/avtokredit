<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelTypeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_type_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fuel_type_id');
            $table->string('name', 50);
            $table->string('locale')->index();
            $table->unique(['fuel_type_id', 'locale']);
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuel_type_translations');
    }
}
