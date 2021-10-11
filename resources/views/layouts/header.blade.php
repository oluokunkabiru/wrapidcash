<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


          <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

            <div class="container">
              <div class="row align-items-center position-relative">
                <img class="mr-3" style="max-width: 5%; height: auto;"  src="{{ appSettings()->getMedia('logo')->first()->getFullUrl() }}" alt="Rapid cash">

                  <div class="site-logo">

                    <a href="{{ route('welcome') }}" class="text-black"><span class="text-dark">RapidCash</a>
                  </div>

                    <nav class="site-navigation text-center ml-auto" role="navigation" >

                      <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                        <li><a href="{{ route('welcome') }}" class="nav-link">Home</a></li>
                        <li><a href="{{ route('welcome') }}#about-section" class="nav-link">About</a></li>
                        @guest

                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Login/Register
                          </a>
                          <div class="dropdown-menu ">
                            @if (Route::has('login'))
                            <a class="dropdown-item text-black" href="{{ route('login') }}">Login</a>
                            @endif

                            @if (Route::has('register'))
                            <a class="dropdown-item " href="{{ route('register') }}">Register</a>
                            @endif
                          </div>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{ ucwords(Auth::user()->name) }}
                            </a>
                            <div class="dropdown-menu ">
                              <a class="dropdown-item text-black" href="{{ route('home') }}">Dashboard</a>

                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                               {{ __('Logout') }}
                           </a>

                           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                               @csrf
                           </form>                            </div>
                          </li>
                          @endguest

                        <li><a href="{{ route('welcome') }}#contact-section" class="nav-link">Contact</a></li>
                      </ul>
                    </nav>



                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              </div>
            </div>

          </header>

