<li class="side-nav-item mt-5">
    <a href="{{ route('dashboard') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
        <span class="menu-text"> Dashboard </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('chart') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-chart-line"></i></span>
        <span class="menu-text"> Live Charts </span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarInvestment" aria-expanded="false" aria-controls="sidebarInvestment"
        class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-coins"></i></span>
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
        <span class="menu-icon"><i class="ti ti-arrow-down-circle"></i></span>
        <span class="menu-text"> Deposit </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('withdraw.create') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-arrow-up-circle"></i></span>
        <span class="menu-text"> Withdraw </span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('transaction.history') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-history"></i></span>
        <span class="menu-text"> Transaction History </span>
    </a>
</li>

<li class="side-nav-item">
    <a data-bs-toggle="collapse" href="#sidebarSettings" aria-expanded="false" aria-controls="sidebarSettings"
        class="side-nav-link">
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
