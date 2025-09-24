  <div class="sidenav-menu">

      <!-- Brand Logo -->
      <a href="{{ route('home') }}" class="logo">
          <span class="logo-light">
              <span class="logo-lg"><img src="{{ asset('dashboard/images/logo.png') }}" alt="logo"></span>
              <span class="logo-sm"><img src="{{ asset('dashboard/images/logo-sm.png') }}" alt="small logo"></span>
          </span>

          <span class="logo-dark">
              <span class="logo-lg"><img src="{{ asset('dashboard/images/logo-dark.png') }}" alt="dark logo"></span>
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
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{ route('chart') }}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                      <span class="menu-text"> Live Charts </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarInvestment" aria-expanded="false"
                      aria-controls="sidebarInvestment" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-medical-cross"></i></span>
                      <span class="menu-text">
                          investment
                      </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarInvestment">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="{{ route('investment.create') }}" class="side-nav-link">
                                  <span class="menu-text">Make an Investment</span>
                              </a>
                          </li>
                          <li class="side-nav-item">
                              <a href="{{ route('plan') }}" class="side-nav-link">
                                  <span class="menu-text">Investment plans</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>

              <li class="side-nav-item">
                  <a href="{{ route('deposit.create') }}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Deposit </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{ route('withdraw.create') }}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Withdraw </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a href="{{ route('transaction.history') }}" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-building-hospital"></i></span>
                      <span class="menu-text"> Transaction History </span>
                  </a>
              </li>

              <li class="side-nav-item">
                  <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false"
                      aria-controls="sidebarSettings" class="side-nav-link">
                      <span class="menu-icon"><i class="ti ti-medical-cross"></i></span>
                      <span class="menu-text">
                          Settings
                      </span>
                      <span class="menu-arrow"></span>
                  </a>
                  <div class="collapse" id="sidebarSettings">
                      <ul class="sub-menu">
                          <li class="side-nav-item">
                              <a href="{{ route('settings.profile') }}" class="side-nav-link">
                                  <span class="menu-text">Update Profile</span>
                              </a>
                          </li>
                          <li class="side-nav-item">
                              <a href="{{ route('settings.password') }}" class="side-nav-link">
                                  <span class="menu-text">Update Password</span>
                              </a>
                          </li>

                      </ul>
                  </div>
              </li>

          </ul>

          <div class="clearfix"></div>
      </div>
  </div>
