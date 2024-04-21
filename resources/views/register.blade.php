<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Register</h1>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register.post') }}" method="POST" >

                        @csrf
                        <div class="mb-3">
                            <label form="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="oumayma saidi" required>
                        </div>
                        <div class="mb-3">
                            <label form="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="oumayma@gmail.com" required>
                        </div>
                        <div class="mb-3">
                            <label form="passwrd" class="form-label">password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                        <select name="role" id="">
                        <option value="user" class="mb-3">User</option>
                        <option value="guide" class="mb-3">Guide</option>
                        </select>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-orange btn-round right">Register</button>
                            </div>
                        </div>
                        <div>
                            <h6><a href="{{ route('login') }}">you have a conte ?</a></h6>
                           </div>
                    </form>
                </div>
            </div>
        </div>
</div>
