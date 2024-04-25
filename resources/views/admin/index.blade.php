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
    <nav class="navbar">
        <div class="container">
            <div class="navbar-bars">
                <a href="#" class="navbar-title sidebar-toggle" style="padding: 0;"><i class="ion-navicon-round"></i></a>
                <a href="index.html" class="navbar-title">TrekTrouve Time</a>
            </div>
            <div class="navbar-item">
                <a href="{{ route('home') }}" class="navbar-title">TrekTrouve Time</a>
                <ul>
                    <li><a href="destination.html">Articles</a></li>

                    <li><a href="{{ route('admin.excursions.index') }}">Excursion Management</a></li>
                    <li><a href="{{ route('admin.posts.index') }}">post Management</a></li>

                    <li><a href="{{ route('admin.users.index') }}">User Management</a></li>

                    <li><form action="{{ route('logout') }}"  method="POST">
                        @csrf<button  class="btn-login" id="openLogin">logout</button>
                    </form></li>


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




    <section class="section-header-single">
        <img src="img/bg-news.jpg">
        <div class="overlay">
            <div class="header-title">
                <h3>    Admin</h3>
            </div>
        </section>
    </section>

    <ul class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li>Excursion</li>
    </ul>

    <section class="section section-archive">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="add-form">

                            <div class="overview">
                                <div class="stats" data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">
                                    <h2>Total Users: {{ $totalUsers }}</h2>
                                </div>
                                <div class="stats" data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">
                                    <h2>Total Posts: {{ $totalPosts }}</h2>
                                </div>
                                <div class="stats" data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">
                                    <h2>Total Excursions: {{ $totalExcursions }}</h2>
                                </div>
                            </div>
                            <div class="actions">
                                <a href="{{ route('admin.users.index') }}"><button data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">Manage Users</button></a>
                                <a href="{{ route('admin.posts.index') }}"><button data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">Manage Posts</button></a>
                                <a href="{{ route('admin.excursions.index') }}"><button data-slide="slides" data-slide-target="#find" class="btn-ticket btn-orange">Manage Excursions</button></a>
                            </div>

    </section>

    <section class="section-footer">
        <div class="texture-handler-top"></div>

        <div class="footer-bottom">
            <p><a href="https://github.com/yogs22/tourism-bali-template" rel="noreferer" target="_blank">Tourism Template</a> - Created With <span class="ion-heart red"></span> to create a Lovable Website</p>
        </div>
    </section>
    @include('layouts.footer-scripts')

    </body>
    </html>
    </body>
    </html>
