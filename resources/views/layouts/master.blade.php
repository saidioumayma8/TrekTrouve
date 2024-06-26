<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>TrekTrouve</title>

	<!-- Meta Description -->
	<meta name="description" content="Bali Travel Time">
	<meta name="keywords" content="Travel, Bali, Tourism">
	<meta name="robots" content="index, nofollow">
	<meta name="web_author" content="Yogi Prasertawan">
	<meta name="language" content="Indonesian">

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
    <li><a class="{{ route('login') }}" href="login.html"> Login</a></li>
</ul>
</div>

<!-- Sidebar Overlay -->
<section class="sidebar-overlay"></section>


<section class="section-header">
	<div class="section-header-image">
		<img src="{{asset('assets/img/header.jpg ') }}" alt="Header">
	</div>
	<div class="container">
		<div class="section-header-inner">
			<div class="section-header-title">
				<h3 class="title">GREAT <br> ART <br>OF <br>TrekTrouve</h3>
				<p>Telusuri Keindahan Bali Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
				<a href="" class="btn btn-round btn-orange">See Our Vacation</a>
			</div>
			<div class="section-header-title-xs">
				<h3 class="title">GREAT ART OF TrekTrouve</h3>
				<p>Telusuri Keindahan Bali Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
				<a href="" class="btn btn-round btn-orange">See Our Vacation</a>
			</div>
		</div>
	</div>
</section>

<!-- Section About -->

<section class="section section-about">
	<div class="about-head slides">
		<h3>TrekTrouve Time</h3>
		<p>TrekTrouve, or TT, is your gateway to unforgettable journeys across Morocco. We specialize in curated trips that immerse you in the heart of Moroccan culture, adventure, and natural beauty</p>
	</div>
	<div class="about-body">
		<div class="row ">
			<div class="col">
				<img src="{{ asset('assets/img/About/035-trekking.png') }}">
				<h2>ADVENTURE</h2>
				<p>Embark on immersive journeys to discover the hidden gems of Morocco, from ancient cities to breathtaking landscapes.</p>
			</div>
			<div class="col">
				<img src="{{ asset('assets/img/About/028-book.png') }}">
				<h2>GUIDE</h2>
				<p>Our knowledgeable guides are your key to unlocking the wonders of Morocco. With their expertise and passion, they'll lead you on unforgettable adventures, sharing insider tips and local insights along the way</p>
			</div>
			<div class="col">
				<img src="{{ asset('assets/img/About/024-tent.png') }}">
				<h2>STAY</h2>
				<p>Experience the authentic hospitality of Morocco with our carefully selected accommodations. From cozy riads in bustling medinas to luxurious desert camps under the stars, we offer a range of options to suit every traveler's taste and budget.</p>
			</div>
		</div>
	</div>
</section>

<!-- Section Explore -->

{{-- <!-- <section class="section-explore">
	<div class="texture-handler-top"></div>
	<div class="overlay">
		<div class="caption">
			<h2>ENJOY BEUTY & friendliness OF</h2> <br>
			<img src="img/bali-island.png" alt="TrekTrouve">
		</div>
	</div>
	<div class="texture-handler-bottom"></div>
</section> --> --}}

<!-- Section Discover -->

<section class="section section-discover" id="discover">
	<div class="section-head">
		<div class="section-line"></div>
		<h3 class="section-title">TrekTrouve travel experts</h3>
		<p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Bali yang dapat anda jelajahi</p>
	</div>
	<div class="section-discover-body ">
		<div class="col">
			<a>
				<img src="{{ asset('assets/img/selfie.jpg') }}" alt="Destination">
				<div class="caption">
					<p>DESTINATION</p>
					<div class="line"></div>
					<div class="caption-text">
						<p>Kunjungi destinasi wisata yang belum pernah anda temui sebelumnya</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col">
			<a>
				<img src="{{ asset('assets/img/culture.jpg') }}">
				<div class="caption" alt="Culture">
					<p>CULTURE</p>
					<div class="line"></div>
					<div class="caption-text">
						<p>Selain pemandangan yang indah bali juga memiliki budaya yang mengesankan</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col">
			<a>
				<img src="{{ asset('assets/img/event.jpg') }}">
				<div class="caption" alt="Event">
					<p>EVENT</p>
					<div class="line"></div>
					<div class="caption-text">
						<p>Ikuti dan ketahui event - event menarik yang berlangsung di Bali</p>
					</div>
				</div>
			</a>
		</div>
		<div class="col">
			<a >
				<img src="{{ asset('assets/img/stay.jpg') }}">
				<div class="caption" alt="Stay">
					<p>WHERE TO STAY</p>
					<div class="line"></div>
					<div class="caption-text">
						<p>Temukan tempat penginapan terbaik dengan harga yang relatif murah</p>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<!-- Gallery Bali -->

<section class="section section-gallery">
	<div class="section-head">
		<div class="section-line"></div>
		<h3 class="section-title">OUR GALLERY</h3>
		<p class="section-subtitle">Potret indahnya kenampakan Bali yang tidak boleh anda lewatkan</p>
	</div>
	<div class="section-gallery-body">
		<div class="row">
			<div class="col-video">
				<video controls>
				  <source src="{{ asset('assets/img/explore.mp4') }}" type="video/mp4">
				  Your browser does not support HTML5 video.
				</video>
			</div>
			<div class="col-image">
				<div class="row">
					<div class="col" onclick="window.location.href='gallery.html'">
						<img src="{{ asset('assets/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg') }}">
						<div class="overlay">
							<span class="ion-search"></span>
						</div>
					</div>
					<div class="col" onclick="window.location.href='gallery.html'">
						<img src="{{ asset('assets/iimg/Gallery/26870845_1740142096076715_486825953067008000_n.jpg') }}">
						<div class="overlay">
							<span class="ion-search"></span>
						</div>
					</div>
					<div class="col" onclick="window.location.href='gallery.html'">
						<img src="{{ asset('assets/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg') }}">
						<div class="overlay">
							<span class="ion-search"></span>
						</div>
					</div>
					<div class="col" onclick="window.location.href='gallery.html'">
						<img src="{{ asset('assets/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg') }}">
						<div class="overlay">
							<span class="ion-search"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Section Tours -->

<section class="section section-tour">
	<div class="section-head">
		<div class="section-line"></div>
		<h3 class="section-title">Prochains voyages</h3>
		<p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Bali dan kepopuleran wisata tersebut</p>
	</div>
	<div class="section-tour-body">
		<div class="row">
            @foreach($excursions as $excursion)
			<div class="col-1 ">
				<img src="storage/{{ $excursion->image }}">
				<div class="overlay">
					<div class="caption">
						<div class="caption-text">
							<p>{{ $excursion->title }}</p>
							<b>{{ $excursion->prix }} Dh</b><br>
							<b>{{ $excursion->date }}</b><br>
							<b>{{ $excursion->length }} m</b>
							<a href="{{ route('guide.trail', $excursion) }}" class="btn btn-orange btn-round right">See Details</a>
						</div>
					</div>
				</div>
			</div>
            @endforeach
	    </div>
    </div>
</section>


<section class="section section-tour">
	<div class="section-head">
		<div class="section-line"></div>
		<h3 class="section-title">Tips and Articles</h3>
		<p class="section-subtitle">Wisata terbaik berdasarkan tingkat ketertarikan wisatawan Bali dan kepopuleran wisata tersebut</p>
	</div>
	<div class="section-tour-body">
		<div class="row">
            @foreach($posts as $communitypost)

			<div class="col-1 ">
				<img src="storage/{{ $communitypost->image }}">
				<div class="overlay">
					<div class="caption">
						<div class="caption-text">
							<p>{{ $communitypost->title }}</p>
							<a href="{{ route('post.index', $communitypost->id) }}" class="btn btn-orange btn-round ">See Details</a>

						</div>
					</div>
				</div>
			</div>
            @endforeach
        </div>
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
