<?php

class PostsController extends \BaseController {


  public function getPost($slug)
  {
    $post = Post::where('slug', '=', $slug)->get()->first();
    if (!$post) {
      return Redirect::to('page-not-found');
    }
    return View::make('posts/show', array('post' => $post));
  }

  public function getTaggedPosts($slug)
  {
    $activeTag = Tag::where('slug', '=', $slug)->get()->first();
    if (!$activeTag) {
      return Redirect::to('/posts/tag/all');
    }

    $posts = Post::orderBy('created_at', 'DESC')->whereHas('tags', function($query) use($slug)
    {
        $query->where('slug', '=', $slug);

    })->get();

    $tags = Tag::orderBy('name')->get();


    return View::make('posts/index',
      array(
        'posts' => $posts,
        'tags' => $tags,
        'activeTag' => $activeTag
      )
    );
  }



}