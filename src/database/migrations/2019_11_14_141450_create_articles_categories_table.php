<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('articles_id')->unsigned();
            $table->integer('categories_id')->unsigned();
            // $table->timestamps();

            $table->foreign('articles_id')->references('id')->on('articles')
						->onDelete('restrict')
						->onUpdate('restrict');

			$table->foreign('categories_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
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
        Schema::dropIfExists('articles_categories');
    }
}
