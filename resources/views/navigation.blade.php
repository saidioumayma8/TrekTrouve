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
                @auth
                @if(Auth::user()->role == 'guide')
			    <li><a href="{{ route('guide.excursions') }}" class="btn btn-primary">View Excursions</a>
                </li>

                <li><a href="{{ route('guide.create') }}">Add Excursion</a></li>

                @endif
			    <li><a href="{{ route('post.create') }}"> Add Post</a></li>
                
			    <li><a href="{{ route('reservations.index') }}"> My reservation</a></li>

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
