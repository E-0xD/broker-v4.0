<li class="side-nav-item mt-3">
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
    <a href="{{ route('trading') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-coins"></i></span>
        <span class="menu-text"> Trading </span>
    </a>
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
    <a href="{{ route('settings.profile') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-settings"></i></span>
        <span class="menu-text">Update Profile</span>
    </a>
</li>

<li class="side-nav-item">
    <a href="{{ route('settings.password') }}" class="side-nav-link">
        <span class="menu-icon"><i class="ti ti-settings"></i></span>
        <span class="menu-text">Update Password</span>
    </a>
</li>
