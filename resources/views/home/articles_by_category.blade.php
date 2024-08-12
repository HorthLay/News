


<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $categorys->name_en }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/logo1.png">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset("news/css/animate.css") }}">
    <!-- Icomoon -->
    <link rel="stylesheet" href="{{ asset("news/css/icomoon.css") }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset("news/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("news/css/style.css") }}">
    <!-- Include your CSS and other head elements -->

    <style>



        .like-button {
            display: flex;
            align-items: center;
            background-color: #007BFF; /* Primary color */
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        
        .like-button i {
            margin-right: 8px;
            font-size: 18px; /* Adjust icon size if needed */
        }
        
        /* Change background and text color on hover */
        .like-button:hover {
            background-color: #0056b3; /* Darker shade of primary color */
            color: #ffffff; /* Slightly lighter text color */
        }
        
        .like-button:focus {
            outline: none; /* Removes default focus outline */
        }
        
        </style>
</head>
<body>
<header id="fh5co-header">
    <div class="container-fluid">
        <div class="row">
            <ul class="fh5co-social">
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
            <div class="col-lg-12 col-md-12 text-center">
                <h1 style="font-family: 'Trebuchet MS', Helvetica, sans-serif" id="fh5co-logo"><a href="{{url('/')}}">{{ $categorys->name_en }}</a></h1>
            </div>
        </div>
    </div>
</header>
<div class="container-fluid">
    @foreach($articles as $article)
        <div class="row fh5co-post-entry">
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box" style="margin: auto;">
                <figure>
                    @if($article->featured_image)
				<a href="{{url('article_detail', $article->id)}}"><img src="{{ asset('articles/' . $article->featured_image) }}" alt="Featured Image" style="width: 200px; height: auto;">     
				</a>               @endif
                </figure>
              
				<span class="fh5co-meta"><a href="#">{{ $article->category }}</a></span>
                
                <h2 class="fh5co-article-title">{{ $article->title }}</h2>
				<span class="fh5co-meta">Like: {{ $article->likes->count() }}</span>

                <span class="fh5co-meta fh5co-date">{{ $article->created_at->format('F jS, Y') }}</span>
				<form action="{{ route('articles.like', $article) }}" method="POST">
                    @csrf
					<button type="submit" class="like-button">
						{{ $article->likes->where('user_id', auth()->id())->count() ? 'Unlike' : 'Like' }}
					</button>
					
                </form>
            </article>
			@endforeach
        </div>
</div>
	
<footer id="fh5co-footer">
    <p><small>&copy; 2016. Magazine Free HTML5. All Rights Reserved. <br> Designed by <a href="http://freehtml5.co" target="_blank">FREEHTML5.co</a>  Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
</footer>

<script src="{{ asset("news/js/jquery.min.js") }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset("news/js/jquery.easing.1.3.js") }}"></script>
<!-- Bootstrap -->
<script src="{{ asset("news/js/bootstrap.min.js") }}"></script>
<!-- Waypoints -->
<script src="{{ asset("news/js/jquery.waypoints.min.js") }}"></script>
<!-- Main JS -->
<script src="{{ asset("news/js/main.js") }}"></script>

</body>
</html>
