
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
      <li>Post Management</li>
    </ul>

    <table>
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
                        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

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
    </body>
    </html>
