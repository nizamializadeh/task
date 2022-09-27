<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('zona');
            $table->string('shopn');
            $table->string('shopname');
            $table->string('owner');
            $table->string('von');
            $table->string('fin');
            $table->string('mobil');
            $table->string('mail');
            $table->string('date');
            $table->string('muqvilen');
            $table->text('image');
            $table->boolean('type');
            $table->unsignedBigInteger('mall_id')->unsigned()->index();
            $table->foreign('mall_id')->references('id')->on('malls')->onDelete('cascade');
            $table->unsignedBigInteger('sector_id')->unsigned()->index();
            $table->foreign('sector_id')->references('id')->on('sectors')->onDelete('cascade');
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
        Schema::dropIfExists('shops');
    }
}
