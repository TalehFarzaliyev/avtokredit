<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewfieldToCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('gear_id')->after('city_id');
            $table->boolean('deposit')->default(0)->nullable()->after('barter'); // 0 Disable // 1 Enable
            $table->integer('deposit_period')->default(0)->nullable()->after('engine_volume');
            $table->string('deposit_amount')->nullable()->after('engine_volume');
            $table->string('deposit_daily_pay')->nullable()->after('engine_volume');
            $table->integer('credit_period')->default(0)->nullable()->after('engine_volume');
            $table->string('credit_initial_amount')->nullable()->after('engine_volume');
            $table->string('credit_monthly_amount')->nullable()->after('engine_volume');
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
        Schema::table('cars', function (Blueprint $table) {
            //
        });
    }
}
