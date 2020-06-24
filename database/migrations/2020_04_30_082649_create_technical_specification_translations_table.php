<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalSpecificationTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_specification_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('technical_specification_id');
            $table->string('name', 50);
            $table->string('locale')->index();
            // $table->unique(['technical_specification_id', 'locale']);
            // $table->foreign('technical_specification_id')->references('id')->on('technical_specifications')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technical_specification_translations');
    }
}
