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

              <x-layouts.app.sidebar.user />

              @switch(Auth::user()->role)
                  @case('master')
                      <x-layouts.app.sidebar.admin />
                      <x-layouts.app.sidebar.master />
                  @break

                  @case('admin')
                      <x-layouts.app.sidebar.admin />
                  @break
              @endswitch

          </ul>

          <div class="clearfix"></div>
      </div>
  </div>
