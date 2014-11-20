<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTagsTable extends Migration {

  public function up()
  {
    Schema::create('post_tags', function(Blueprint $table)
    {
      $table->increments('id');
      $table->integer('post_id');
      $table->integer('tag_id');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::drop('post_tags');
  }

}
