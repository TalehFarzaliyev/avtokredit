<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyGroupTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_group_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_group_id');
            $table->string('name', 50);
            $table->string('locale')->index();
            $table->unique(['company_group_id', 'locale']);
            $table->foreign('company_group_id')->references('id')->on('company_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_group_translations');
    }
}
