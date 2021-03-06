 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @if (Auth::user()->account_number)

      <li class="nav-item">
        <a class="nav-link" href="{{ route('transaction_history') }}">
          <i class="mdi mdi-history menu-icon"></i>
          <span class="menu-title">Transaction history</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('all-withdraw-request') }}">
          <i class=" mdi mdi-currency-ngn menu-icon"></i>
          <span class="menu-title">All withdraw request</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('coin.index') }}">
          <i class="mdi mdi-coin  menu-icon"></i>
          <span class="menu-title">Buy coin</span>
        </a>
      </li>

      @else
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="mdi mdi-coin  menu-icon"></i>
          <span class="menu-title text-danger">Update your bank details</span>
        </a>
      </li>
      @endif



    </ul>
  </nav>
  <!-- partial -->
