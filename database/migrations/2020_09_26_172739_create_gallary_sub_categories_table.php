<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallarySubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallary_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallary_category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('creater')->nullable();
            $table->unsignedBigInteger('updater')->nullable();
            $table->timestamps();

            $table->foreign('gallary_category_id')->references('id')->on('gallary_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallary_sub_categories');
    }
}
