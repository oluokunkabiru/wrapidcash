 <!-- partial:partials/_navbar.html -->
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
        <a class="navbar-brand brand-logo" href="{{ route('home') }}"><img src="{{ appSettings()->getMedia('logo')->first()->getFullUrl() }}" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="{{ appSettings()->getMedia('logo')->first()->getFullUrl() }}" alt="logo"/></a>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100">
        <li class="nav-item nav-search d-none d-lg-block w-100">
          {{--  <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
          </div>  --}}
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item dropdown mr-4">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell mx-0"></i>

            <span class="coun text-danger">{{ Auth::user()->unreadNotifications->count(); }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a href="{{ route('mark-all-as-read') }}"><small>Mark all as read</small></a>
            @forelse (Auth::user()->unreadNotifications as $notification)

            <a class="dropdown-item" href="{{ route('mark-as-read', $notification->id) }}">
              <div class="item-thumbnail">
                <div class="item-icon {{ $notification->data['bg'] }}">
                  <i class="{{ $notification->data['icon'] }} mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">{{ $notification->data['message'] }}</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                    {{ Auth::user()->timeago($notification->created_at) }}
                </p>
              </div>
            </a>
            @empty
            <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-danger">
                    <i class="mdi mdi-delete-forever  mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal text-danger">No notification</h6>

                </div>
              </a>
            @endforelse

          </div>
        </li>
        <li class="nav-item nav-profile dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{  Auth::user()->getMedia('avatar')->first() ? Auth::user()->getMedia('avatar')->first()->getFullUrl(): asset('front-asset/images/coins.jpg') }}" alt="profile"/>
            <span class="nav-profile-name">{{ ucwords(Auth::user()->name) }}</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="{{ route('user-profile') }}">
              <i class=" mdi mdi-account-settings text-primary"></i>
              Profile
            </a>
            <a class="dropdown-item" href="{{ route('profile-setting') }}">
              <i class="mdi mdi-settings text-primary"></i>
              Settings
            </a>
            <a class="dropdown-item"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              <i class="mdi mdi-logout text-primary"></i>
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
