<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('code',10)->unique();
            $table->string('symbol_left',10)->nullable();
            $table->string('symbol_right',10)->nullable();
            $table->string('decimal_places',15)->nullable();
            $table->string('value',20);
            $table->boolean('status')->default(0); // 0 Disable // 1 Enable
            $table->integer('value')->default(0);
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
        Schema::dropIfExists('currencies');
    }
}
