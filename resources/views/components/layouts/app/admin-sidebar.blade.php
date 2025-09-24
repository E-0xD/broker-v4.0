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

            <!-- Plans Management -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPlans" aria-expanded="false"
                    aria-controls="sidebarPlans" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-package"></i></span>
                    <span class="menu-text">
                        Investment Plans
                    </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPlans">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('admin.plans.index') }}" class="side-nav-link">
                                <span class="menu-text">All Plans</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.plans.create') }}" class="side-nav-link">
                                <span class="menu-text">Create Plan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Users Management -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false"
                    aria-controls="sidebarUsers" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-users"></i></span>
                    <span class="menu-text">
                        User Management
                    </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarUsers">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('admin.users.index') }}" class="side-nav-link">
                                <span class="menu-text">All Users</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Investments Management -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarInvestments" aria-expanded="false"
                    aria-controls="sidebarInvestments" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-cash"></i></span>
                    <span class="menu-text">
                        Investments
                    </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarInvestments">
                    <ul class="sub-menu">
                        <li class="side-nav-item">
                            <a href="{{ route('admin.investments.index') }}" class="side-nav-link">
                                <span class="menu-text">All Investments</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.investments.create') }}" class="side-nav-link">
                                <span class="menu-text">Create Investment</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Settings -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false"
                    aria-controls="sidebarSettings" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-settings"></i></span>
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