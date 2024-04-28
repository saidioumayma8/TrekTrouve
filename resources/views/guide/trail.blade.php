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
                <h3>{{ $excursion->title }}</h3>
                <p>Date: {{ $excursion->date }}</p>
                <p>Price: Rp. {{ $excursion->prix }}</p>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="panel">
            <div class="panel-header">
                <span class="ion-android-clipboard"></span>&nbsp; Detail Ticket
            </div>
            <div class="panel-body">
                <div class="detail">
                    <div class="col-1">
                        <div class="col-2">
                            Price: {{ $excursion->price }}
                        </div>
						<div class="col-2">
							Date: {{ $excursion->date }}
						</div>
						<div class="col">
							Transport
						</div>
						<div class="col">
							Breakfast
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="panel">
			<div class="panel-header">
				<span class="ion-ios-bookmarks"></span>&nbsp; Description
			</div>
			<div class="panel-body">
				<p>    Visit to Elephant Safari Park, to learn about the diversity and ancestry of the elephants
    Museum and Elephant Discovery Information Centre, to see over 1000 fossils such as skulls, horns, and tusks
    Feed the adult and baby elephants </p>
    <p> A chance to watch the animal show, which features stunts, sports, and audience interaction
    Admission fee, insurance, and transfer service included
    Buffet lunch at Taro Restaurant included Your Bali getaway is about to become much more thrilling thanks to this world-renowned spot. Depart from the bustling areas for a while and have an adventure in Elephant Safari Park.</p>
			</div>
		</div>
		<div class="panel">
			<div class="panel-header">
				<span class="ion-ios-bookmarks"></span>&nbsp; Higlight
			</div>
			<div class="panel-body">
				<ul>
				    <li>Visit to Elephant Safari Park, to learn about the diversity and ancestry of the elephants</li>
				    <li>Museum and Elephant Discovery Information Centre, to see over 1000 fossils such as skulls, horns, and tusks</li>
				    <li>Feed the adult and baby elephants</li>
				    <li>A chance to watch the animal show, which features stunts, sports, and audience interaction</li>
				    <li>Admission fee, insurance, and transfer service included</li>
				    <li>Buffet lunch at Taro Restaurant included</li>
				</ul>
			</div>
		</div>
		<div class="panel">
			<div class="panel-header">
				<span class="ion-map"></span>&nbsp; Location
			</div>
			<div class="panel-body">
				<div class="col-1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15788.424139256455!2d115.283967!3d-8.391231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x165ad32430c70f14!2sElephant+Safari+Park+Lodge+Bali!5e0!3m2!1sen!2sid!4v1524497165802" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-2">
					<h3>Transportation & Venue Info</h3>
					<p>Hotel pickup</p>
					<p>Pickup and drop-off are available within Nusa Dua, Kuta, Seminyak, Sanur and Ubud areas only.</p>
				</div>
			</div>
		</div>
        @auth
		<div class="panel">
            <div class="panel-body">
                <form method="POST" action="{{ route('trail_reserv',$excursion) }}">
                    @csrf

                    <div class="form-group">
                        <label for="people">Number of Pax</label>
                        <select class="form-control" id="people" name="people" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <button type="submit" data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">Reserve Now</button>
                </form>
            </div>
        </div>
        @endauth

	</div>
</section>

<section class="section-footer">
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

</body>
</html>
