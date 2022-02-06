<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTecnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__tecnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('post_title_bn');
            $table->string('post_image');
            $table->text('details_bn_one');
            $table->text('details_bn_two');
            $table->integer('main_slider')->nullable();
            $table->integer('current_news')->nullable();
            $table->integer('current_post')->nullable();
            $table->integer('popular_post')->nullable();
            $table->integer('general_news')->nullable();
            $table->integer('related_post')->nullable();
            $table->integer('status')->nullable();
            $table->integer('view_count')->default(0);
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
        Schema::dropIfExists('post__tecnos');
    }
}
