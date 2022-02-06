<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__opinions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');
            $table->string('post_title_bn');
            $table->string('post_image');
            $table->text('details_bn_one');
            $table->text('details_bn_two');
            $table->integer('main_slider')->nullable();
            $table->integer('popular_slider')->nullable();
            $table->integer('popular_opinion')->nullable();
            $table->integer('general_opinion')->nullable();
            $table->integer('related_opinion')->nullable();
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
        Schema::dropIfExists('post__opinions');
    }
}
