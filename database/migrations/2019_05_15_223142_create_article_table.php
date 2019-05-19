<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source')->nullable(true);
            $table->string('category_type')->nullable(true);
            $table->string('title')->nullable(true);
            $table->string('content')->nullable(true);
            $table->string('description')->nullable(true);
            $table->string('slug')->nullable(true);
            $table->string('image_banner_url')->nullable(true);
            $table->boolean('is_published');
            $table->dateTime('published_at')->nullable(true);
            $table->string('author')->nullable(true);
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
        Schema::dropIfExists('article');
    }
}
