<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FunMovies - Episodes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FunMovies - Watch Your Favorite Episodes">
    <meta name="keywords" content="movies, episodes, fun, watch">
    <meta name="author" content="FunMovies">

    <!-- Social Media Integration -->
    <meta property="og:title" content="FunMovies - Episodes">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="FunMovies">
    <meta property="og:description" content="Watch the latest episodes on FunMovies">
    <meta name="twitter:title" content="FunMovies - Episodes">
    <meta name="twitter:image" content="">
    <meta name="twitter:url" content="">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('news/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('news/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('news/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('news/js/modernizr-2.6.2.min.js') }}"></script>

    <!-- Inline Styles -->
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
        .video-wrapper {
            margin: 20px 0;
        }
        #episode-select {
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <!-- Header -->
    <header id="fh5co-header" class="text-center">
        <div class="container">
            <div class="row">
                <ul class="fh5co-social list-inline">
                    <li class="list-inline-item"><a href="#"><i class="icon-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-instagram"></i></a></li>
                </ul>
                <div class="col-12">
                    <h1 id="fh5co-logo"><a href="{{ url('/') }}">FunMovies <sup>TM</sup></a></h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="fh5co-article-title animate-box">Episode</h2>
                <select id="episode-select" class="form-control" onchange="updateIframe()">
                    @foreach($episodes as $episode)
                        <option value="{{ $episode->video_url }}">{{ $episode->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="video-wrapper col-md-12">
                <iframe id="episode-iframe" src="{{ $episodes->first()->video_url }}" frameborder="0" allowfullscreen style="width: 100%; height: 500px;"></iframe>
            </div>
            <div class="col-md-12">
                <figure class="col-md-3 col-sm-3 col-xs-12 animate-box">
                    @if($article->featured_image)
                        <a href="{{ url('article_detail', $article->id) }}">
                            <img src="{{ asset('articles/' . $article->featured_image) }}" alt="Featured Image" class="img-fluid">
                        </a>
                    @endif
                </figure>
                <span class="fh5co-meta"><a href="#">{{ $article->category }}</a></span>
                <h2 class="fh5co-article-title">{{ $article->title }}</h2>
                <p class="fh5co-lead">{{ $article->highlights }}</p>
                <a href="{{ url('article_detail', $article->id) }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
		
    </div>

    

    <!-- Footer -->
    <footer id="fh5co-footer" class="text-center">
        <div class="container">
            <p><small>&copy; 2024. FunMovies. All Rights Reserved. <br> Designed by FunMovies</small></p>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('news/js/jquery.min.js') }}"></script>
    <script src="{{ asset('news/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('news/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('news/js/main.js') }}"></script>

    <!-- Script to Update Iframe Source -->
    <script>
        function updateIframe() {
            var select = document.getElementById('episode-select');
            var iframe = document.getElementById('episode-iframe');
            iframe.src = select.value;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.show-more').forEach(function(button) {
                button.addEventListener('click', function() {
                    let shortComment = this.previousElementSibling.previousElementSibling;
                    let fullComment = this.previousElementSibling;
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
