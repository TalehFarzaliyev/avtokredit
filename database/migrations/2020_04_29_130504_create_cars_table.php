<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_brand_id');
            $table->unsignedBigInteger('body_type_id');
            $table->unsignedBigInteger('car_model_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedBigInteger('fuel_type_id');
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('currency_id');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->string('mileage', '50');
            $table->string('email','50');
            $table->decimal('price', 50);
            $table->string('power', 50);
            $table->text('description');
            $table->text('technical_specification_id');
            $table->string('phone', 30);
            $table->year('year');
            $table->string('name',100);
            $table->boolean('status')->default(0); // 0 Disable // 1 Enable
            $table->boolean('type')->default(0); // 0 default // 1 premium  // 2 vip
            $table->integer('visit')->default(0);
            $table->boolean('credit')->default(0); // 0 Disable // 1 Enable
            $table->boolean('barter')->default(0); // 0 Disable // 1 Enable
            $table->integer('engine_volume')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->foreign('body_type_id')->references('id')->on('body_types')->onDelete('cascade');
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->foreign('fuel_type_id')->references('id')->on('fuel_types')->onDelete('cascade');
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade'); // Rauf
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
