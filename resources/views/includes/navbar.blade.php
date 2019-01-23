<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a class="navbar-brand" href="/">GadgetParkho.com</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Blog</a>
      </li>
    </ul>
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="/posts/create">Create Post</a>
    </div>


     <!-- Right Side Of Navbar -->
    <div class="navbar-nav">
        <!-- Authentication Links -->
        @if (Auth::guest())
            <li class="nav-item nav-link"><a class="nav-item nav-link" href="{{ route('login') }}">Login</a></li>
            <li class="nav-item nav-link"><a class="nav-item nav-link" href="{{ route('register') }}">Register</a></li>
        @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                    <li>
                        <a class="dropdown-item" href="/dashboard">Dashboard</a>
                    </li>
                </ul>
            </li>
        @endif
    </div>

    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  -->
  </div>
</nav>


