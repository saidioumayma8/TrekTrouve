

{{-- juyhgtbrvfdcs --}}





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

	@include('layouts.header2')


</head>
<body>
    <div class="app">
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">

                    <h1 class="logo-title">
                        <span>Trek</span>
                        <span>Trouve</span>
                    </h1>
                </div>
            </div>
            <div class="app-header-navigation">
                <div class="tabs">
                    <a href="{{ route('admin.users.index') }}">
                        user managment
                    </a>
                    <a href="{{ route('admin.posts.index') }}" class="active">
                        post managment
                    </a>
                    <a href="{{ route('admin.excursions.index') }}">
                        excurtions managment
                    </a>

                </div>
            </div>
            <div class="app-header-actions">

                <div class="app-header-actions-buttons">
                    <form action="{{ route('logout') }}"  method="POST">
                        @csrf<button  class="btn-login" id="openLogin">logout</button>
                    </form>
                </div>
            </div>


        </header>
	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">

				<a href="#">
					<i class="ph-check-square"></i>
					<span>Home</span>
				</a>
			</nav>
			<footer class="footer">
				<h1>Trektrouve<small>©</small></h1>
				<div>
					Trektrouve ©<br />
					All Rights Reserved 2024
				</div>
			</footer>
		</div>
		<div class="app-body-main-content">
			<section class="service-section">
				<h2>Admin</h2>

				<div class="mobile-only">
					<button class="flat-button">
						Toggle search
					</button>
				</div>

                <table class="table table-striped table-hover table-dark ">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->date }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.update', $post->id) }}" class="btn btn-orange btn-round right">Edit</a>

                                </td>
                                <td>
                                    <form action="{{ route('admin.posts.delete', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-orange btn-round right">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
	</div>
</div>
</body>
</html>


