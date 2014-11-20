
@extends('layout')

@section('title')
  <title>Posts</title>
@stop

@section('head')
  <head>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="/css/prism.css" rel="stylesheet" type="text/css" />
    <link href="/css/navigationBar.css" rel="stylesheet" type="text/css" />
    <link href="/css/posts.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="/js/jquery.parallax-1.1.js"></script>
    <script type="text/javascript" src="/js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="/js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="/js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollTo-1.4.2-min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  </head>
@stop

@section('body')
  <body data-spy="scroll" data-offset="10" id="page">

    {{ View::make('navigationBar') }}

    <div id='list'>
      <div class='list'>
        <div class='row-fluid'>
          <div class='span3'>
            <div class='container-fluid'>
              {{ View::make('posts/tags', array('tags' => $tags, 'activeTag' => $activeTag)) }}
            </div>
          </div>
          <div class='span7'>
            <div class='container-fluid'>
              {{ View::make('posts/posts', array('posts' => $posts, 'activeTag' => $activeTag)) }}
            </div>
          </div
        </div>
      </div>
    </div>

    @foreach ($posts as $post)
      {{ View::make('posts/post', array('post' => $post)) }}
    @endforeach

    {{ View::make('script') }}

    <script>
      $(document).ready(function(){
        $('#list').localScroll(800);
        @foreach ($posts as $post)
          $('#{{{ $post->slug }}}').parallax("50%", 0, 0.1, true);
        @endforeach
      })
    </script>

</body>

@stop