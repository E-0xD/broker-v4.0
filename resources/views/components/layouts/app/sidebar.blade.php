  <div class="sidenav-menu">

      <!-- Brand Logo -->
      <a href="index.html" class="logo">
          <span class="logo-light">
              <span class="logo-lg"><img src="{{ asset('dashboard/images/logo.png') }}" alt="logo"></span>
              <span class="logo-sm"><img src="{{ asset('dashboard/images/logo-sm.png') }}" alt="small logo"></span>
          </span>

          <span class="logo-dark">
              <span class="logo-lg"><img src="dashboard/images/logo-dark.png" alt="dark logo"></span>
              <span class="logo-sm"><img src="{{ asset('dashboard/images/logo-sm.png') }}" alt="small logo"></span>
          </span>
      </a>

      <!-- Full Sidebar Menu Close Button -->
      <button class="button-close-fullsidebar">
          <i class="ti ti-x align-middle"></i>
      </button>

      <div data-simplebar>

          <!--- Sidenav Menu -->
          <ul class="side-nav">

              <li class="side-nav-item mt-5">
                  <a href="{{ route('dashboard') }}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                      <span class="menu-text"> Dashboard </span>
                      <span class="badge bg-success rounded-pill">5</span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{route('plan')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Investment </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{route('deposit.create')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Deposit </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{route('withdraw.create')}}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Withdraw </span>
                  </a>
              </li>

          </ul>

          <div class="clearfix"></div>
      </div>
  </div>
