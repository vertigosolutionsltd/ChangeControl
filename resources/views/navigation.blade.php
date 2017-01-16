<nav class="navbar navbar-light bg-faded">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Vertigo Solutions') }}
        </a>

        @unless(Auth::guest())
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Change Control
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{url('/forms')}}">View All</a>
                        <a class="dropdown-item" href="{{url('/forms/create')}}">Add</a>
                    </div>
                </li>
                

                <li class="nav-item dropdown"">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        HR
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item">Holiday Forms 
                            <span class="tag tag-danger">coming soon!</span>
                        </a>
                        <a class="dropdown-item">Etc 
                            <span class="tag tag-danger">coming soon!</span>
                        </a>
                    </div>

                </li>
            </ul>
        @endunless
        <ul class="nav navbar-nav float-xs-right">
            @if( Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
            @else

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{url('/customers')}}">View All Customers</a>
                        <a class="dropdown-item" href="{{url('/customers/add')}}">Add New Customer</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link btn-sm bg-primary text-white rounded-circle" href="#" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ inislise( Auth::user()->name ) }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item" href="{{url('/logout')}}" href="#">Logout</a>
                    </div>
                </li>
                
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @endif
        </ul>
        
    </div>
</nav>