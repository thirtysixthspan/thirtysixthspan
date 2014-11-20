<?php

Route::get('posts/tag/{slug}', array('as' => 'posts', 'uses' => 'PostsController@getTaggedPosts'));

Route::get('posts/{slug}', array('as' => 'post', 'uses' => 'PostsController@getPost'));

Route::get('/', array('as' => 'home', 'uses' => 'FrontController@getIndex'));

Route::get('page-not-found', array('as' => '404', 'uses' => 'BaseController@pageNotFound'));

App::missing(function($exception)
{
  return Redirect::to('page-not-found');
});