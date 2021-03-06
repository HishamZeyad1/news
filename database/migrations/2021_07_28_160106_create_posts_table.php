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
            $table->bigIncrements('id');
            $table->string( 'title' );
            $table->text( 'content' );

            $table->dateTime( 'date_written' );

            $table->string( 'featured_image' )->nullable();
            $table->integer( 'votes_up' )->nullable();
            $table->integer( 'votes_down' )->nullable();

            $table->text( 'voters_up' )->nullable();
            $table->text( 'voters_down' )->nullable();
            // $table->text( 'voters' )->nullable();

            // Relationships
            $table->foreignId('author_id')->constraint('authors')->onDelete('cascade');
            $table->foreignId('category_id')->constraint('categories')->onDelete('cascade');

            // $table->integer( 'author_id' );
            // $table->integer( 'category_id' );
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
