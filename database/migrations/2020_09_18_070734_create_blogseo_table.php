<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogseoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogseo', function (Blueprint $table) {
            $table->id('SeoID');
            $table->string('MetaTitle');
            $table->string('MetaDescription');
            $table->string('MetaKeyword');
            $table->boolean('IndexFollow');
            $table->integer('BlogID')->unsigned();
            $table->foreign('BlogID')->references('BlogId')->on('blog');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogseo');
    }
}
