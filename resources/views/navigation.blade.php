<nav class="navbar navbar-light bg-faded">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Vertigo Solutions') }}
        </a>
        <ul class="nav navbar-nav">
                <li class="nav-item {{set_active('customers')}}"">
                    <a class="nav-link" href="{{url('/customers')}}">Customers</a>
                </li>
                <li class="nav-item {{set_active('forms')}}">
                    <a class="nav-link" href="{{url('/forms')}}">Forms</a>
                </li>
            </ul>
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
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu">
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