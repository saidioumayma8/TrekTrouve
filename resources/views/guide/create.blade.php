<!-- Add Excursion Form -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>10 Ribu Sepeda Tua dari 30 Negara Berkumpul di Bali - Bali Travel Time</title>
	<link rel="icon" type="image/png" href="img/icon/bavel.png">

	<!-- Meta Description -->
	<meta name="description" content="Bali Travel Time">
	<meta name="keywords" content="Travel, Bali, Tourism">
	<meta name="robots" content="index, nofollow">
	<meta name="web_author" content="Yogi Prasertawan">
	<meta name="language" content="Indonesian">
    @include('layouts.header')

</head>
<body>

<nav class="navbar scrolled">
	<div class="container">
		<div class="navbar-bars">
			<a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
        	<a href="index.html" class="navbar-title">Bali Travel Time</a>
		</div>
		<div class="navbar-item">
			<a href="index.html" class="navbar-title" style="color: white">Bali Travel Time</a>
			<ul>
		        <li><a href="destination.html">Destination</a></li>
			    <li><a href="gallery.html">Gallery</a></li>
			    <li><a href="index.html#discover">Discover</a></li>
			    <li><a href="news.html"> News</a></li>
				<li><a href="login.html">Login</a></li>
  		  	</ul>
		</div>
	</div>
</nav>

<!-- Sidebar -->
<div class="sidebar">
<ul class="sidebar-list">
	<li><a href="" class="close"><span class="ion-android-close"></span></a></li>
	<li class="sidebar-list-hover"><a href="index.html">Home</a></li>
    <li class="sidebar-list-hover"><a href="destination.html">Destination</a></li>
    <li class="sidebar-list-hover"><a href="gallery.html">Gallery</a></li>
    <li class="sidebar-list-hover"><a href="index.html#discover">Discover</a></li>
    <li class="sidebar-list-hover"><a href="news.html"> News</a></li>
    <li><a class="btn btn-orange btn-round" href="login.html"> Login</a></li>
</ul>
</div>
<div class="add-form">
    <h3>Add Excursion and Trail</h3>
    <form id="excursion-trail-form" action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="excursion_name">Excursion Title:</label>
            <input type="text" id="excursion_name" name="excursion_name" required>
        </div>
        <div class="form-group">
            <label for="excursion_difficulty">Excursion Difficulty Level:</label><br>
           <select name="excursion_difficulty" id="1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
           </select>
        </div>
        <div class="form-group">
            <label for="excursion_date">Excursion Date:</label>
            <input type="date" id="excursion_date" name="excursion_date" required>
        </div>
        <div class="form-group">
            <label for="excursion_text">Excursion description:</label>
            <input type="text" id="excursion_text" name="excursion_text" required>
        </div>
        <div class="form-group">
            <label for="excursion_duration">Excursion Duration:</label>
            <input type="number" id="excursion_duration" name="excursion_duration" required>
        </div>
        <div class="form-group">
            <label for="excursion_location">Excursion Location:</label>
            <input type="text" id="excursion_location" name="excursion_location" required>
        </div>
        <div class="form-group">
            <label for="excursion_image">Excursion Image:</label>
            <input type="file" id="excursion_image" name="excursion_image" required>
        </div>

        <div class="form-group">
            <label for="trail_name">Trail Name:</label>
            <input type="text" id="trail_name" name="trail_name" required>
        </div>
        <div class="form-group">
            <label for="trail_start_point">Trail Start Point:</label>
            <input type="text" id="trail_start_point" name="trail_start_point" required>
        </div>
        <div class="form-group">
            <label for="trail_end_point">Trail End Point:</label>
            <input type="text" id="trail_end_point" name="trail_end_point" required>
        </div>
        <div class="form-group">
            <label for="trail_length">Trail Length:</label>
            <input type="number" id="trail_length" name="trail_length" required>
        </div>
        <button type="submit">Add Excursion and Trail</button>
    </form>
</div>
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
