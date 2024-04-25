
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
                    <a href="{{ route('admin.users.index') }}" >
                        user managment
                    </a>
                    <a href="{{ route('admin.posts.index') }}" >
                        post managment
                    </a>
                    <a href="{{ route('admin.excursions.index') }}"  class="active">
                        Ecxursion managment
                    </a>

                </div>
            </div>
            <div class="app-header-actions">

                <div class="app-header-actions-buttons">
                    <button class="icon-button large">
                        <i class="ph-magnifying-glass"></i>
                    </button>
                    <button class="icon-button large">
                        <i class="ph-bell"></i>
                    </button>
                </div>
            </div>
            <div class="app-header-mobile">
                <button class="icon-button large">
                    <i class="ph-list"></i>
                </button>
            </div>

        </header>
	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="#">
                    <li><form action="{{ route('logout') }}"  method="POST">
                        @csrf<button  class="btn-login" id="openLogin">logout</button>
                    </form></li>
				</a>
				<a href="#">
					<i class="ph-check-square"></i>
					<span>Scheduled</span>
				</a>
				<a href="#">
					<i class="ph-swap"></i>
					<span>Transfers</span>
				</a>
				<a href="#">
					<i class="ph-file-text"></i>
					<span>Templates</span>
				</a>
				<a href="#">
					<i class="ph-globe"></i>
					<span>SWIFT</span>
				</a>
				<a href="#">
					<i class="ph-clipboard-text"></i>
					<span>Exchange</span>
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
                                    <form action="{{ route('admin.excursions.accept', $excursion->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="btn btn-success">Accept</button>
                                    </form>
                                    <form action="{{ route('admin.excursions.reject', $excursion->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Reject</button>
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


