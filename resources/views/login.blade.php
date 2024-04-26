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
<div class="container loginn  row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login.post') }}" method="POST" >
                        @csrf
                        <div class="mb-3">
                            <label form="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email"  required>
                        </div>
                        <div class="mb-5">
                            <label form="passwrd" class="form-label">password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3 ">
                            <div class="d-grid ">
                                <button class="btn btn-orange btn-round ">Login</button>
                            </div>
                        </div>
                        <div>
                        <h4 class="have"><a href="{{ route('register') }}">Create a conte ?</a></h4>
                    </div>

                    </form>

                </div>
            </div>
        </div>
</div>
@include('layouts.footer-scripts')

</body>
</html>
