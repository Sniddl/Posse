@include('layouts.head')
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-faded navbar-static-top" id="navbar">
          <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
          <ul class="nav navbar-nav">

            @if(Request::is('login'))
            <li class="nav-item">
              <a class="nav-link" href="/register">Register</a>
            </li>
            @elseif(Request::is('register'))
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            @endif

            @if(Auth::check())
              <li class="nav-item dropdown float-xs-right">
                <a class="nav-link dropdown-toggle" href="" id="nav-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="nav-drop">
                  <a  href="{{ url('/logout') }}"
                      class = "dropdown-item"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>

                </div>
              </li>
            @endif
          </ul>
          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
<footer>
  @include('layouts.footer')
</footer>
</html>
