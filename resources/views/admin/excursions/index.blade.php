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

    @else
    <li><a href="{{ route('login') }}"><button  class="btn-login" id="openLogin">LOGIN</button></a></li>
                    <li><a href="{{ route('register') }}"><button  class="btn-login" id="openLogin">REGISTER</button></a></li>
                    @endauth

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
    <h1>Excursion Management</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($excursions as $excursion)
                <tr>
                    <td>{{ $excursion->title }}</td>
                    <td>{{ $excursion->date }}</td>
                    <td>{{ $excursion->location }}</td>
                    <td>
                        <a href="{{ route('admin.excursions.edit', $excursion->id) }}">Edit</a>
                        <form action="{{ route('admin.excursions.destroy', $excursion->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
