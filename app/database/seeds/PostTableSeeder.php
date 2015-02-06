<?php

class PostTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = User::first();

		for ($i=1; $i<=10; $i++) {
			$post = new Post();
			$post->title = "Post $i";
			$post->body = "This is post $i.";
			$post->body .= "Ipsum.";
			$post->user_id = $user->id;

			$post->save();
		}
	}

}