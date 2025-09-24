 <hr>
 <!-- Plans Management -->
 <li class="side-nav-item">
     <a data-bs-toggle="collapse" href="#sidebarPlans" aria-expanded="false" aria-controls="sidebarPlans"
         class="side-nav-link">
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
     <a data-bs-toggle="collapse" href="#sidebarUsers" aria-expanded="false" aria-controls="sidebarUsers"
         class="side-nav-link">
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
     <a data-bs-toggle="collapse" href="#sidebarInvestments" aria-expanded="false" aria-controls="sidebarInvestments"
         class="side-nav-link">
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
