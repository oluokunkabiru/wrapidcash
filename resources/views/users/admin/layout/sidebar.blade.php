 @php
     $myrole = Auth::user()->getRoleNames()[0];
    $role = Spatie\Permission\Models\Role::findByName($myrole);
 @endphp
 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      @if ($role->hasPermissionTo("manage user"))

      <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="mdi mdi-account-multiple menu-icon"></i>
          <span class="menu-title">Manage users</span>
        </a>
      </li>
@endif

    @if ($role->hasPermissionTo("view transaction history"))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('transaction-history.index') }}">
          <i class="mdi mdi-history menu-icon"></i>
          <span class="menu-title">Transaction history</span>
        </a>
      </li>
      @endif
      @if ($role->hasPermissionTo("view investments"))
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#investment" aria-expanded="false" aria-controls="investment">
          <i class="mdi mdi-chart-line menu-icon"></i>
          <span class="menu-title">Investments</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="investment">
          <ul class="nav flex-column sub-menu">
            @if ($role->hasPermissionTo("view withdrawal request"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('withdraw-request.index') }}"> Withdrawal request </a></li>
           @endif
           @if ($role->hasPermissionTo("view active investment"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('active-investment') }}"> Active investment </a></li>
            @endif
            @if ($role->hasPermissionTo("view pending investment"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('pending-investment') }}">Pending investment </a></li>
            @endif
            @if ($role->hasPermissionTo("view due investment"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('ended-investment') }}">Due Investment</a></li>
            @endif
            @if ($role->hasPermissionTo("view withdrawal request"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('withdrawed-investment') }}">Processed payment </a></li>
            @endif
        </ul>
        </div>
      </li>
    @endif

    @if ($role->hasPermissionTo("view manage coin"))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('wrap-coin.index') }}">
          <i class="mdi mdi-coin  menu-icon"></i>
          <span class="menu-title">Manage coins</span>
        </a>
      </li>
    @endif

    @if ($role->hasPermissionTo("view staff"))
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#staffs" aria-expanded="false" aria-controls="staffs">
          <i class="mdi mdi-account-switch  menu-icon"></i>
          <span class="menu-title">Staff management</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="staffs">
          <ul class="nav flex-column sub-menu">
            @if ($role->hasPermissionTo("add staff"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('users.create') }}"> Add new staff </a></li>
            @endif

            @if ($role->hasPermissionTo("view manage role"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('role.index') }}"> Manage role </a></li>
            @endif


            @if ($role->hasPermissionTo("manage permission"))
            <li class="nav-item"> <a class="nav-link" href="{{ route('permission.index') }}">Manage permission </a></li>
            @endif
        </ul>
        </div>
      </li>

      @endif

      @if ($role->hasPermissionTo("view manage coin"))
      <li class="nav-item">
        <a class="nav-link" href="{{ route('site-setting') }}">
          <i class=" mdi mdi-settings  menu-icon"></i>
          <span class="menu-title">Website setting</span>
        </a>
      </li>
      @endif
    </ul>
  </nav>
  <!-- partial -->
