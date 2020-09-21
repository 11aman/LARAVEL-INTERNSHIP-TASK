<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('BlogId');
            $table->string('Name');
            $table->string('Subname');
            $table->integer('BlogcategoryId')->unsigned();
            $table->foreign('BlogcategoryId')->references('CategoryId')->on('blogcategory');
            $table->string('Bannerimage');
            $table->string('Mainimage');
            $table->string('Description');
            $table->string('Status')->default(1);
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
        Schema::dropIfExists('blogs');
    }
}
