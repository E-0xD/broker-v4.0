 <header class="app-topbar">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Brand Logo -->
                    <a href="{{route('dashboard')}}" class="logo">
                        <span class="logo-light">
                            <span class="logo-lg"><img src="{{asset('dashboard/images/logo.png')}}" alt="logo"></span>
                            <span class="logo-sm"><img src="{{asset('dashboard/images/logo-sm.png')}}" alt="small logo"></span>
                        </span>

                        <span class="logo-dark">
                            <span class="logo-lg"><img src="{{asset('dashboard/images/logo-dark.png')}}" alt="dark logo"></span>
                            <span class="logo-sm"><img src="{{asset('dashboard/images/logo-sm.png')}}" alt="small logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="sidenav-toggle-button px-2">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </button>

                    <!-- Horizontal Menu Toggle Button -->
                    <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="ti ti-menu-deep fs-22"></i>
                    </button>

                  
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
                            <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown" data-bs-offset="0,19" type="button" aria-haspopup="false" aria-expanded="false">
                                {{-- <img src="{{asset('dashboard/images/users/avatar-1.jpg')}}" width="32" class="rounded-circle me-lg-2 d-flex" alt="user-image"> --}}
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                     <h6 class="my-0 fw-normal">Welcome, </h6>
                                    <h5 class="my-0">{{Auth::user()->name}}</h5>
                                   
                                </span>
                                <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                               

                                <!-- item-->
                                <a href="{{route('dashboard')}}" class="dropdown-item">
                                    <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">My Account</span>
                                </a>

                                <!-- item-->
                                <a href="{{route('deposit.create')}}" class="dropdown-item">
                                    <i class="ti ti-wallet me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Wallet : <span class="fw-semibold">${{number_format(Auth::user()->balance)}}</span></span>
                                </a>

                                <!-- item-->
                                <a href="{{route('settings.profile')}}" class="dropdown-item">
                                    <i class="ti ti-settings me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Settings</span>
                                </a>



                                <!-- item-->
                                <form href="{{route('logout')}}" class="dropdown-item active fw-semibold text-danger">
                                    @csrf
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <button type="submit" class="align-middle">Sign Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>