<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
	{
	    $table->increments('id');
	    $table->string('email', 200)->unique();
	    $table->string('password', 255);
	    $table->string('first_name', 50);
	    $table->string('last_name', 150);
	    $table->rememberToken();
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
	public function down()
	{
		Schema::drop('users');
	}

}
