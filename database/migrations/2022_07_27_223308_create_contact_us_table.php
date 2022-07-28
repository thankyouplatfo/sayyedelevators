<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_phrase');
            $table->foreignId('city_id')->references('id')->on('cities')->cascadeOnDelete('cascade');
            $table->foreignId('country_id')->references('id')->on('countries')->cascadeOnDelete('cascade');
            $table->string('mobile_number');
            $table->string('e_mail');
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
        Schema::dropIfExists('contact_us');
    }
}
