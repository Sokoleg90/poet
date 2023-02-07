<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ua_posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title');
            $table->text('content');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
            $table -> softDeletes();

            $table->index('category_id', 'ua_post_category_idx');
            $table->foreign('category_id', 'ua_post_category_fk')->on('ua_categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ua_posts');
    }
};
