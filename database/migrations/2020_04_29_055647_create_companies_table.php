<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_group_id');
            $table->foreign('company_group_id')->references('id')->on('company_groups')
            ->onDelete('cascade');
            $table->string('name',100);
            $table->text('location');
            $table->string('image');
            $table->string('cover_image');
            $table->string('email','50')->unique();
            $table->string('password');
            $table->boolean('status')->default(0); // 0 Disable // 1 Enable
            $table->string('phone');
            $table->integer('visit');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
