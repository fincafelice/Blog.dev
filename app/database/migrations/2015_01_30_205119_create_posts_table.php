<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() // commit chgs to TB
	{
		Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->text('body');
            $table->string('image_url');
            $table->string('source_name', 100);
            $table->string('source_url', 200);
            $table->timestamps();

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() // undo chgs to TB
	{
		Schema::drop('posts');
	}

}
