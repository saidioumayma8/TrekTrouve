<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Elephant Safari Park - Bali Travel Time</title>
	<link rel="icon" type="image/png" href="img/icon/bavel.png">
	<meta name="description" content="Bali Travel Time">
	<meta name="keywords" content="Travel, Bali, Tourism">
	<meta name="robots" content="index, nofollow">
	<meta name="web_author" content="Yogi Prasertawan">
	<meta name="language" content="Indonesian">
    @include('layouts.header')
</head>
<body style="background: #e6eaed;">

<!-- Navbar -->
@include('navigation')


<!-- Sidebar -->
<div class="sidebar">
<ul class="sidebar-list">
	<li><a href="" class="close"><span class="ion-android-close"></span></a></li>
	<li class="sidebar-list-hover"><a href="index.html">Home</a></li>
    <li class="sidebar-list-hover"><a href="destination.html">Articles</a></li>
    <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
    <li class="sidebar-list-hover"><a href="index.html#discover">Discover</a></li>
    <li class="sidebar-list-hover"><a href="news.html"> Excursions</a></li>
    @auth

                <li><form action="{{ route('logout') }}"  method="POST">
                    @csrf<button  class="btn-login" id="openLogin">logout</button>
                </form></li>

@else
<li><a href="{{ route('login') }}"><button  class="btn-login" id="openLogin">LOGIN</button></a></li>
				<li><a href="{{ route('register') }}"><button  class="btn-login" id="openLogin">REGISTER</button></a></li>
                @endauth
</ul>
</div>

<!-- Sidebar Overlay -->

<section class="sidebar-overlay"></section>

<!-- Login Form -->

<div class="login-overlay"></div>

<!-- Section -->

<section class="section-ticket">
    <div class="header">
        <img src="{{ asset('assets/img/elephant.jpg') }}">
        <div class="overlay">
            <div class="desc">
                <h3>Add Post</h3>
            </div>
        </div>
    </div>
<section class="section-header">

<div class="container loginn  row justify-content-center mt-5">
<form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">title</label>
        <input type="text" name="title" id="title" class="form-control-file">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="form-control">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control-file">
    </div>
    <!-- You can add fields for userid and itemsid if necessary -->
    <button type="submit" class="btn btn-orange btn-round ">Submit</button>
</form>
</div>
</section>
<section class="section-footer">
	<div class="texture-handler-top"></div>
	<div class="row">
		<div class="col-left">
			<p>Copyright &copy; 2017</p>
			<p>Jl. Panglima Sudirman, Caruban Madiun <br>
			Phone : +62 851 2343 9090 <br>
			Email : contact@bavel.com </p>
			<a href="https://www.facebook.com/bestbali/" target="_blank"><span class="ion-social-facebook icon-social"></span></a>
			<a href="https://www.instagram.com/explorebali/" target="_blank"><span class="ion-social-instagram icon-social"></span></a>
			<a href="https://twitter.com/hashtag/explorebali?lang=en" target="_blank"><span class="ion-social-twitter icon-social"></span></a>
		</div>
		<div class="col-right">
			<b>EXPERIENCE</b>
			<ul>
				<li><a href="#">Natural</a></li>
				<li><a href="#">Culture</a></li>
				<li><a href="#">Religi</a></li>
				<li><a href="#">Culnary</a></li>
				<li><a href="#">Adventure</a></li>
			</ul>
		</div>
		<div class="col-right">
			<b>TRAVEL GUIDE</b>
			<ul>
				<li><a href="#">Tourism Guide</a></li>
				<li><a href="#">Travel Agent</a></li>
				<li><a href="#">Accomodations</a></li>
				<li><a href="#">On Budget</a></li>
			</ul>
		</div>
		<div class="col-right">
			<b>WHAT'S HAPPEN</b>
			<ul>
				<li><a href="#">News</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="#">Tips & Info</a></li>
			</ul>
		</div>
	</div>
	<div class="footer-bottom">
		<p><a href="https://github.com/yogs22/tourism-bali-template" rel="noreferer" target="_blank">Tourism Template</a> - Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
	</div>
</section>
@include('layouts.footer-scripts')

</body>
</html>
