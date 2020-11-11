<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('lecturer')->nullable();
            $table->longtext('description')->nullable();
            $table->string('image')->nullable();
            $table->string('noOfStudent')->nullable();
            $table->string('rating')->nullable();
            $table->string('strikFee')->nullable();
            $table->string('fee')->nullable();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('creater')->nullable();
            $table->unsignedBigInteger('updater')->nullable();

            $table->foreign('course_category_id')->references('id')->on('course_categories')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('courses');
    }
}
