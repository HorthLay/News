
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>FUNIME AND MOVIE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="shortcut icon" href="images/logo1.png">

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
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="{{asset ("news/css/animate.css")}}">
	<!-- Icomoon -->
	<link rel="stylesheet" href="{{asset ("news/css/icomoon.css")}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset ("news/css/bootstrap.css")}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="{{asset ("news/css/style.css")}}">



	
	<!-- Modernizr JS -->
	<script src="{{asset ("news/js/modernizr-2.6.2.min.js")}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body> 
         {{-- user --}}
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
			<figure>
				@if (Auth::check() && Auth::user()->user_image)
				<img src="users/{{Auth::user()->user_image}}" alt="Free HTML5 Bootstrap Template" class="img-responsive">
				@else
				<img src="img/user.png" alt="Free HTML5 Bootstrap Template" class="img-responsive">

			@endif
			
			</figure>
			<h3 class="heading">About Me</h3>
			@if (Auth::check() && Auth::user()->name)
			<h2>{{Auth::user()->name}}</h2>		
			@else
			<h2>Unknow</h2>
			@endif
			
			<p>Please Support our News Website </p>
			<ul class="fh5co-social">
				<li><a href="#"><i class="icon-twitter"></i></a></li>
				<li><a href="#"><i class="icon-facebook"></i></a></li>
				<li><a href="#"><i class="icon-instagram"></i></a></li>
			</ul>
		</div>

		<div class="fh5co-menu">
			<div class="fh5co-box">
				<h3 class="heading">Categories</h3>
				<ul>
					@foreach($categories as $category)
					<a href="{{ route('articles_by_category', $category->name_en) }}"><li>{{ $category->name_en }}</li></a>
                @endforeach
					@if(Route::has('login'))


					@auth
		  
		  
					
					<form style="padding: 10px;" method="POST" action="{{ route('logout') }}">
					  @csrf
		  
					  <input class="btn btn-success" type="submit" value="logout"><br>
					  <span><i style="font-size:18px" class="fa">&#xf0e0;</i>{{Auth::user()->email}}</span>
					</form>
		  
		  
				  @else
					<a href="{{url('/login')}}">
					  <i class="fa fa-user" aria-hidden="true"></i>
					  <span>
						Login
					  </span>
					</a>
		  
					<a href="{{url('/register')}}">
					  <i class="fa fa-vcard" aria-hidden="true"></i>
					  <span>
						  Register
					  </span>
					</a>
					@endauth
		  
					@endif
				</ul>
			</div>
			<div class="fh5co-box">
				
			</div>
		</div>
	</div>
	<!-- END User -->
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
			
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		
					
			
		
                {{-- Image Logo --}}
				<div class="col-lg-12 col-md-12 text-center">
					<h1 style="font-family: 'Trebuchet MS', Helvetica, sans-serif" id="fh5co-logo"><a href="{{url('/')}}">Funime<sup>x</sup>Movie<img src="{{asset ("images/logo1.png")}}" width="200" height="auto" alt="Free HTML5 Bootstrap Template"></a></h1>
				</div>

				

			</div>
		
			<div>
				<form action="{{ url('/search') }}" method="GET">
					<h3 class="heading">Search</h3>
					<div class="form-group">
						<input type="text" name="search" class="form-control" placeholder="Type a keyword">
						<button type="submit" class="btn btn-primary" style="font: 100;">Search</button>
					</div>
				</form>
				
			</div>
		</div>

	</header>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
    @foreach($articles as $article)
        <div class="row fh5co-post-entry">
            <article class="col-lg-3 col-md-3 col-sm-3 col-xs-6 col-xxs-12 animate-box" style="margin: auto;">
                <figure>
                    @if($article->featured_image)
				<a href="{{url('article_detail', $article->id)}}"><img src="{{ asset('articles/' . $article->featured_image) }}" alt="Featured Image" style="width: 200px; height: auto;">     
				</a>               @endif
                </figure>
              
				<span class="fh5co-meta"><a href="{{ route('articles_by_category', $category->name_en) }}">{{ $article->category }}</a></span>
                
                <h2 class="fh5co-article-title">{{ $article->title }}</h2>
				<span class="fh5co-meta">Like: {{ $article->likes->count() }}</span>

                <span class="fh5co-meta fh5co-date">{{ $article->created_at->format('F jS, Y') }}</span>
				<form action="{{ route('articles.like', $article) }}" method="POST">
					@csrf
					<button type="submit" class="like-button">
						<i class="fa {{ $article->likes->where('user_id', auth()->id())->count() ? 'fa-heart' : 'fa-heart-o' }}"></i>
						{{ $article->likes->where('user_id', auth()->id())->count() ? ' Unlike' : ' Like' }}
					</button>
					
				</form>
				
            </article>
			@endforeach
        </div>
</div>
	


	
	<!-- jQuery -->
	<script src="{{asset ("news/js/jquery.min.js")}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset ("news/js/jquery.easing.1.3.js")}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset ("news/js/bootstrap.min.js")}}"></script>
	<!-- Waypoints -->
	<script src="{{asset ("news/js/jquery.waypoints.min.js")}}"></script>
	<!-- Main JS -->
	<script src="{{asset ("news/js/main.js")}}"></script>

	</body>
</html>

