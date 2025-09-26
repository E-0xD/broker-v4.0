  <div class="sidenav-menu">

      <!-- Brand Logo -->
      <a href="{{ route('home') }}" class="logo">
          <img src="{{ asset(config('app.logo')) }}" width="200" alt="logo">
      </a>

      <!-- Full Sidebar Menu Close Button -->
      <button class="button-close-fullsidebar">
          <i class="ti ti-x align-middle"></i>
      </button>

      <div data-simplebar>

          <!--- Sidenav Menu -->
          <ul class="side-nav">

              
              @switch(Auth::user()->role)
                  @case('master')
                      <x-layouts.app.sidebar.admin />
                      <x-layouts.app.sidebar.master />
                  @break

                  @case('admin')
                      <x-layouts.app.sidebar.admin />
                  @break
@default 
<x-layouts.app.sidebar.user />

              @endswitch

          </ul>

          <div class="clearfix"></div>
      </div>
  </div>
