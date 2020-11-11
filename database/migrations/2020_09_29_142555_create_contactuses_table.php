<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactuses', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->nullable();
            $table->string('slug')->unique();
            $table->string('location')->nullable();
            $table->string('mailAddress')->nullable();
            $table->string('optionalMailAddress')->nullable();
            $table->string('officePhone')->nullable();
            $table->string('salePhone')->nullable();
            $table->string('socialPhone')->nullable();
            $table->string('supportSoftwarePhone')->nullable();
            $table->string('supportHardwarePhone')->nullable();
            $table->string('itTrainingPhone')->nullable();
            $table->string('facebookUrl')->nullable();
            $table->string('linkedinUrl')->nullable();
            $table->string('youtubeUrl')->nullable();
            $table->string('instagramUrl')->nullable();
            $table->string('twitterUrl')->nullable();
            $table->longText('map')->nullable();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('creater')->nullable();
            $table->unsignedBigInteger('updater')->nullable();
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
        Schema::dropIfExists('contactuses');
    }
}
