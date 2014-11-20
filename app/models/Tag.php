<?php

class Tag extends \Eloquent {

  protected $fillable = array('name', 'slug');

  //Class methods

  public static function findOrCreate($name)
  {
    $obj = static::where('name', '=', $name)->get()->first();
    return $obj ?: new static(array('name' => $name, 'slug' => static::makeSlug($name)));
  }

  public static function makeSlug($name)
  {
    return str_replace(" ","-",strtolower($name));
  }

  //Instance methods

  public function posts()
  {
    return $this->belongsToMany('Post', 'post_tags');
  }

}
