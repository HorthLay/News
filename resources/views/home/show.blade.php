<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Magazine &mdash; Free Fully Responsive HTML5 Bootstrap Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700" rel="stylesheet" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('news/css/animate.css')}}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{asset('news/css/icomoon.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('news/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('news/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('news/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style>
        body {
            margin-top: 20px;
        }

        .content-item {
            padding: 30px 0;
            background-color: #FFFFFF;
        }

        .content-item.grey {
            background-color: #F0F0F0;
            padding: 50px 0;
            height: 100%;
        }

        .content-item h2 {
            font-weight: 700;
            font-size: 35px;
            line-height: 45px;
            text-transform: uppercase;
            margin: 20px 0;
        }

        .content-item h3 {
            font-weight: 400;
            font-size: 20px;
            color: #555555;
            margin: 10px 0 15px;
            padding: 0;
        }

        .content-headline {
            height: 1px;
            text-align: center;
            margin: 20px 0 70px;
        }

        .content-headline h2 {
            background-color: #FFFFFF;
            display: inline-block;
            margin: -20px auto 0;
            padding: 0 20px;
        }

        .grey .content-headline h2 {
            background-color: #F0F0F0;
        }

        .content-headline h3 {
            font-size: 14px;
            color: #AAAAAA;
            display: block;
        }

        .center-button {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh; /* Optional: centers vertically within the viewport */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }

        .button:hover {
            background-color: #0056b3;
        }

        #comments {
            box-shadow: 0 -1px 6px 1px rgba(0, 0, 0, 0.1);
            background-color: #FFFFFF;
        }

        #comments form {
            margin-bottom: 30px;
        }

        #comments .btn {
            margin-top: 7px;
        }

        #comments form fieldset {
            clear: both;
        }

        #comments form textarea {
            height: 100px;
        }

        #comments .media {
            border-top: 1px dashed #DDDDDD;
            padding: 20px 0;
            margin: 0;
        }

        #comments .media > .pull-left {
            margin-right: 20px;
        }

        #comments .media img {
            max-width: 100px;
        }

        #comments .media h4 {
            margin: 0 0 10px;
        }

        #comments .media h4 span {
            font-size: 14px;
            float: right;
            color: #999999;
        }

        #comments .media p {
            margin-bottom: 15px;
            text-align: justify;
        }

        #comments .media-detail {
            margin: 0;
        }

        #comments .media-detail li {
            color: #AAAAAA;
            font-size: 12px;
            padding-right: 10px;
            font-weight: 600;
        }

        #comments .media-detail a:hover {
            text-decoration: underline;
        }

        #comments .media-detail li:last-child {
            padding-right: 0;
        }

        #comments .media-detail li i {
            color: #666666;
            font-size: 15px;
            margin-right: 10px;
        }
        .short-comment {
        display: inline;
    }
    .full-comment {
        display: none;
    }
    .show-more {
        cursor: pointer;
        color: blue;
        background: none;
        border: none;
        text-decoration: underline;
    }
    .show-more:hover {
        text-decoration: none;
    }
    </style>
</head>
<body>
    <header id="fh5co-header">
        <div class="row">
            {{-- <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a> --}}
            <ul class="fh5co-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
            <div class="col-lg-12 col-md-12 text-center">
                <h1 id="fh5co-logo"><a href="{{url('/')}}">new <sup>TM</sup></a></h1>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row fh5co-post-entry single-entry">
            <article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                @if($article->featured_image)
                <figure class="animate-box">
                    <img src="{{ asset('articles/' . $article->featured_image) }}" alt="Image" class="img-responsive" style="width: 100%; height: auto;">
                </figure>
                @endif
                <span class="fh5co-meta animate-box"><a href="#">{{ $article->category }}</a></span>
                <h2 class="fh5co-article-title animate-box"><a href="#">{{ $article->title }}</a></h2>
                <span class="fh5co-meta fh5co-date animate-box">{{ $article->created_at->format('F jS, Y') }}</span>

                <div class="col-lg-12 col-md-12 text-left content-article">
                    <div class="row">
                        <div class="col-lg-8 animate-box">
                            <p>{{ $article->body }}</p>
                        </div>
                        <div class="col-lg-4 animate-box">
                            <div class="fh5co-highlight right">
                                <h4>Highlight</h4>
                                <p>{{ $article->highlights }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <blockquote>
                                <p style="font-family: 'Trebuchet MS', Helvetica, sans-serif" id="fh5co-logo">&ldquo;{{ $article->body }} &rdquo; <cite>&mdash; {{ $article->user->name }}</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>

    @php
        $youtubeUrl = $article->youtube_video_url;
        $videoId = null;
        if (preg_match('/^.*youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=)([^"&?\/\s]{11})/', $youtubeUrl, $matches)) {
            $videoId = $matches[1];
        }
        $embedUrl = $videoId ? "https://www.youtube.com/embed/$videoId" : null;
    @endphp

    <div class="video-wrapper">
        @if ($embedUrl)
        <iframe width="560" height="315" src="{{ $embedUrl }}" frameborder="0" allowfullscreen style="width: 100%; height: 500px;"></iframe>
        @else
        <p>Invalid YouTube URL.</p>
        @endif
    </div>

    <div class="center-button">
        @if($article->episodes->count() > 0)
        <a href="{{url('movie', $article->id)}}" class="button">Watch Now</a>
        @else
        <p>Coming Soon.........</p>
        @endif
    </div>
    <section class="content-item" id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h3>Comments: {{ $article->comments->count() }}</h3>

                    <div class="hero_area">
                        <div class="container">
                            <h2>Comments</h2>
                            <ul>
                                @foreach($article->comments->where('parent_id', null) as $comment)
                                    @include('home.comment', ['comment' => $comment])
                                @endforeach
                            </ul>

                            <form action="{{ route('articles.comment', $article) }}" method="POST">
                                @csrf
                                <h3 class="pull-left">New Comment</h3>
                                <button type="submit" class="btn btn-normal pull-right">Add Comment</button>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-sm-3 col-lg-2 hidden-xs">
                                            @if (Auth::check() && Auth::user()->user_image)
                                                <img src="{{ asset('users/' . Auth::user()->user_image) }}" alt="User Image" class="img-responsive">
                                            @else
                                                <img src="{{ asset('img/user.png') }}" alt="Default User Image" class="img-responsive">
                                            @endif
                                        </div>
                                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                            <textarea class="form-control" id="message" name="body" placeholder="Post a comment" required></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <footer id="fh5co-footer">
        <p><small>&copy; 2016. Magazine Free HTML5. All Rights Reserved. <br> Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('news/js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('news/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('news/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('news/js/jquery.waypoints.min.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('news/js/main.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.show-more').forEach(function(button) {
                button.addEventListener('click', function() {
                    let shortComment = this.previousElementSibling.previousElementSibling; // Short comment
                    let fullComment = this.previousElementSibling; // Full comment
                    
                    if (fullComment.style.display === 'none') {
                        shortComment.style.display = 'none';
                        fullComment.style.display = 'inline';
                        this.textContent = 'Show less';
                    } else {
                        shortComment.style.display = 'inline';
                        fullComment.style.display = 'none';
                        this.textContent = 'Show more';
                    }
                });
            });
        });
    </script>
</body>
</html>
