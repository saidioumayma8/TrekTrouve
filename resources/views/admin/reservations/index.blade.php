<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> - TrekTrouve</title>
	<link rel="icon" type="image/png" href="img/icon/bavel.png">

	<!-- Meta Description -->
	<meta name="description" content="Bali Travel Time">
	<meta name="keywords" content="Travel, Bali, Tourism">
	<meta name="robots" content="index, nofollow">
	<meta name="web_author" content="Yogi Prasertawan">
	<meta name="language" content="Indonesian">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	@include('layouts.header')


</head>
<body>

<!-- Navbar -->
@include('navigation')


<!-- Sidebar -->
<div class="sidebar">
<ul class="sidebar-list">
	<li><a href="" class="close"><span class="ion-android-close"></span></a></li>
	<li class="sidebar-list-hover"><a href="index.html">Home</a></li>
    <li class="sidebar-list-hover"><a href="destination.html">Destination</a></li>
    <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
    <li class="sidebar-list-hover"><a href="index.html#discover">Discover</a></li>
    <li class="sidebar-list-hover"><a href="news.html"> News</a></li>
    <li><a class="{{ route('login')}}" href="login.html"> Login</a></li>
</ul>
</div>

<!-- Sidebar Overlay -->
<section class="sidebar-overlay"></section>

<div class="login-overlay"></div>

<section class="section-header-single">
	<img src={{asset('assets/img/temple.jpg') }}>
	<div class="overlay">
		<div class="header-title">
            <h1>Your Reservations</h1>

		</div>
	</section>
</section>



    <div class="section-tour-body">
		<div class="row">
            @foreach($reservations as $reservation)
			<div class="col-1 ">
				<img src="storage/{{ $reservation->excursion->image }}">
				<div class="overlay">
					<div class="caption">
						<div class="caption-text">
							<p>{{ $reservation->excursion->title }}</p>
							<b>{{ $reservation->excursion->prix }} Dh</b><br>
							<b>{{ $reservation->excursion->date }}</b><br>
							<b>{{ $reservation->excursion->length }} m</b>
							<a href="{{ route('guide.trail', $reservation) }}" class="btn btn-orange btn-round right">See Details</a>
						</div>
					</div>
				</div>
			</div>
            @endforeach
	    </div>
    </div>
</div>
<
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
