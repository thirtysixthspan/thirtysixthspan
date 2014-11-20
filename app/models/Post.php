<?php

class Post extends \Eloquent {

  protected $fillable = array(
    'title',
    'slug',
    'date',
    'body',
    'markdown',
    'video_embed',
    'video_url',
    'slide_embed',
    'slide_url'
  );

  //Class methods

  public static function findOrCreate($slug)
  {
    $obj = static::where('slug', '=', $slug)->get()->first();
    return $obj ?: static::create(array('slug' => $slug));
  }

  //Instance methods

  public function tags()
  {
    return $this->belongsToMany('Tag', 'post_tags');
  }

}

