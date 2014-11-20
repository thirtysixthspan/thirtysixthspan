<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug');
			$table->string('date');
			$table->text('body');
			$table->text('markdown');
			$table->text('video_embed');
			$table->string('video_url');
			$table->text('slide_embed');
			$table->string('slide_url');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}

}
