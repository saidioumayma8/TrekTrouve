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

    <h1>Admin Dashboard</h1>
    <div class="overview">
        <div class="stats">
            <h2>Total Users: {{ $totalUsers }}</h2>
        </div>
        <div class="stats">
            <h2>Total Posts: {{ $totalPosts }}</h2>
        </div>
        <div class="stats">
            <h2>Total Excursions: {{ $totalExcursions }}</h2>
        </div>
    </div>
    <div class="actions">
        <a href="{{ route('admin.users.index') }}">Manage Users</a>
        <a href="{{ route('admin.posts.index') }}">Manage Posts</a>
        <a href="{{ route('admin.excursions.index') }}">Manage Excursions</a>
    </div>
    @include('layouts.footer-scripts')

</body>
</html>
