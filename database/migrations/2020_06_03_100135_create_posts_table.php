<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('category_id');

            $table->string('feautred_image')->nullable();

            $table->string('title')->unique();
            $table->string('slug')->unique();

            $table->longText('excerpt')->nullable();
            $table->longText('body')->nullable();

            $table->string('external_url')->nullable();

            $table->timestamp('publish_at')->nullable();

            $table->boolean('is_exclusive')->default(true);
            $table->boolean('is_published')->default(false);

            $table->float('view_count')->nullable();

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
        Schema::dropIfExists('posts');
    }
}
