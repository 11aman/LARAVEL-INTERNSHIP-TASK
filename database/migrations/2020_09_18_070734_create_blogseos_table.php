<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogseos', function (Blueprint $table) {
            $table->id('SeoID');
            $table->string('MetaTitle');
            $table->string('MetaDescription');
            $table->string('MetaKeyword');
            $table->boolean('IndexFollow')->default(1);
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
        Schema::dropIfExists('blogseos');
    }
}
