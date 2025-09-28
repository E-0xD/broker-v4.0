   <header>
       <nav class="navbar navbar-expand-lg navbar-main">
           <div class="container">
               <a class="navbar-brand" href="{{ route('home') }}">
                   <img src="{{ asset(config('app.logo')) }}" width="250" alt="logo">
               </a>
               <div class="right-nav">
                   <div id="google_translate_element"></div>
                   <a href="{{ route('login') }}" class="btn btn-outline--base d-none d-sm-block">
                       Log In <i class="flaticon-arrow-upper-right"></i>
                   </a>
                   <a href="{{ route('register') }}" class="btn btn--base-two d-none d-sm-block">
                       Register <i class="flaticon-arrow-upper-right"></i>
                   </a>

                   <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                       data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                           class="bi bi-list" viewBox="0 0 16 16">
                           <path fill-rule="evenodd"
                               d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                       </svg>
                   </button>

               </div>

               <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                   aria-labelledby="offcanvasNavbarLabel">
                   <div class="offcanvas-header">
                       <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                           <img src="{{ asset(config('app.logo')) }}" width="250" alt="logo">
                       </h5>
                       <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                   </div>
                   <div class="d-flex d-lg-none gap-4 pt-3 justify-content-center">
                       <a href="{{ route('login') }}" class="btn btn-outline--base d-sm-none">
                           Log In <i class="flaticon-arrow-upper-right"></i>
                       </a>
                       <a href="{{ route('contact') }}" class="btn btn--base-two d-sm-none">
                           Contact Us <i class="flaticon-arrow-upper-right"></i>
                       </a>
                   </div>
                   <div class="offcanvas-body align-items-center">
                       <ul class="navbar-nav justify-content-center flex-grow-1">

                           <li class="nav-item">
                               <a class="nav-link active" href="{{ route('home') }}">Home</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('about') }}">About Us</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('faq') }}">FAQs</a>
                           </li>
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                           </li>

                       </ul>
                   </div>
               </div>
           </div>
       </nav>
   </header>
