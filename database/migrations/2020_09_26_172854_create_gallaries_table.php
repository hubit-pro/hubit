<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallaries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallary_category_id');
            $table->unsignedBigInteger('gallary_sub_category_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->longtext('description')->nullable();
            $table->integer('status')->default(1);
            $table->unsignedBigInteger('creater')->nullable();
            $table->unsignedBigInteger('updater')->nullable();
            $table->timestamps();

            $table->foreign('gallary_category_id')->references('id')->on('gallary_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('gallary_sub_category_id')->references('id')->on('gallary_sub_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallaries');
    }
}
