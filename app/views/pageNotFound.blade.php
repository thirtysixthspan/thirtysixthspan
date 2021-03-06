
@extends('layout')

@section('title')
 <title>Page Not Found</title>
@stop

@section('head')
  <head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
    <link href="/css/navigationBar.css" rel="stylesheet" type="text/css" />
    <link href="css/render.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.js"></script>
    <script type="text/javascript" src="js/bootstrap-scrollspy.js"></script>
    <script type="text/javascript" src="js/bootstrap-collapse.js"></script>
    <script type="text/javascript" src="js/jquery.localscroll-1.2.7-min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  </head>
@stop

@section('body')
  <body data-spy="scroll" data-offset="10" id="page">

    {{ View::make('navigationBar') }}

    <div id="about">
        <div class="story">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="offset4">
                    </div>
                    <div class="span8">
                        <h1>Page Not Found</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ View::make('script') }}

    {{ View::make('googleAnalytics') }}

  </body>
@stop