 <header class="app-topbar">
     <div class="page-container topbar-menu">
         <div class="d-flex align-items-center gap-2">

             <!-- Brand Logo -->
             <a href="{{ route('home') }}" class="logo">
                 <img src="{{ asset(config('app.logo')) }}" width="200" alt="logo">
             </a>

             <!-- Sidebar Menu Toggle Button -->
             <button class="sidenav-toggle-button px-2">
                 <i class="ti ti-menu-deep fs-24"></i>
             </button>

             <!-- Horizontal Menu Toggle Button -->
             <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                 <i class="ti ti-menu-deep fs-22"></i>
             </button>

             <div id="google_translate_element"></div>

         </div>

         <div class="d-flex align-items-center gap-2">

             <!-- Light/Dark Mode Button -->
             <div class="topbar-item d-none d-sm-flex">
                 <button class="topbar-link" id="light-dark-mode" type="button">
                     <i class="ti ti-moon fs-22"></i>
                 </button>
             </div>

             <!-- User Dropdown -->
             <div class="topbar-item nav-user">
                 <div class="dropdown">
                     <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                         data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">
                         <i class="ti ti-user fs-1 me-2"></i>
                         <span class="d-lg-flex flex-column gap-1 d-none">
                             <h6 class="my-0 fw-normal">Welcome, </h6>
                             <h5 class="my-0">{{ Auth::user()->name }}</h5>

                         </span>
                         <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                     </a>
                     <div class="dropdown-menu dropdown-menu-end">

                         <!-- item-->
                         <a href="{{ route('dashboard') }}" class="dropdown-item">
                             <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                             <span class="align-middle">{{ ucfirst(Auth::user()->account_type) . ' Account' }}</span>
                         </a>

                         <a href="{{ route('dashboard') }}" class="dropdown-item">
                             <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                             <span class="align-middle uppercase">{{ Auth::user()->trading_platform }}</span>
                         </a>

                         <!-- item-->
                         <a href="{{ route('deposit.create') }}" class="dropdown-item">
                             <i class="ti ti-wallet me-1 fs-17 align-middle"></i>
                             <span class="align-middle">Wallet : <span
                                     class="fw-semibold">{{ Auth::user()->currency . ' ' . number_format(Auth::user()->balance) }}</span></span>
                         </a>

                         <!-- item-->
                         <a href="{{ route('settings.profile') }}" class="dropdown-item">
                             <i class="ti ti-settings me-1 fs-17 align-middle"></i>
                             <span class="align-middle">Settings</span>
                         </a>

                         <!-- item-->
                         <form action="{{ route('logout') }}" method="POST"
                             class="dropdown-item active fw-semibold text-danger">
                             @csrf

                             <button type="submit" class="align-middle btn btn-danger">
                                 <i class="ti ti-logout me-1 fs-17 align-middle"></i>Sign Out</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
