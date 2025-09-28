   <footer class="footer-area">
       <div class="py-120">
           <div class="container position-relative">
               <div class="footer-shape d-none d-lg-block">
                   <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="star">
                   <img src="{{ asset('frontend/svg/chart.svg') }}" alt="chart">
               </div>
               <div class="row justify-content-center gy-5">
                   <div class="col-xl-4 col-lg-6">
                       <div class="footer-item footer-logo-con pe-xl-5">
                           <div class="footer-item__logo">
                               <a href="{{ route('home') }}"> <img src="{{ asset(config('app.logo')) }}" width="250"
                                       alt="logo"></a>
                           </div>
                           <p class="footer-item__desc">
                               {{ config('app.name') }}, we believe is the great traders aren't born they’re built
                               through
                               the
                               right
                               tools, education, and support. Our mission is simple.
                           </p>

                       </div>
                   </div>
                   <div class="col-xl-8">
                       <div class="footer-widget__content ">
                           <div class="footer-item">
                               <h5 class="footer-item__title">Quick Link</h5>
                               <ul class="footer-menu">
                                   <li class="footer-menu__item"> <a href="{{ route('home') }}"
                                           class="footer-menu__link">
                                           Home
                                       </a> </li>
                                   <li class="footer-menu__item"> <a href="{{ route('about') }}"
                                           class="footer-menu__link">
                                           About Us
                                       </a> </li>
                                   <li class="footer-menu__item"> <a href="{{ route('pricing') }}"
                                           class="footer-menu__link">
                                           Pricing Plan
                                       </a> </li>
                                   <li class="footer-menu__item"> <a href="{{ route('contact') }}"
                                           class="footer-menu__link">
                                           Contact Us
                                       </a> </li>
                               </ul>
                           </div>

                           <div class="footer-item">
                               <h5 class="footer-item__title">Contact Us</h5>
                               <ul class="footer-contact-menu">
                                   @if (config('app.address'))
                                       <li class="footer-contact-menu__item">
                                           <div class="footer-contact-menu__item-icon">
                                               <i class="fa-solid fa-location-dot"></i>
                                           </div>
                                           <div class="footer-contact-menu__item-content">
                                               <p>{{ config('app.address') }}</p>
                                           </div>
                                       </li>
                                   @endif
                                   <li class="footer-contact-menu__item">
                                       <a href="" class="d-flex">
                                           <div class="footer-contact-menu__item-icon">
                                               <i class="fa-solid fa-envelope"></i>
                                           </div>
                                           <div class="footer-contact-menu__item-content">
                                               <p><span class="">{{ config('mail.from.address') }}</span>
                                               </p>
                                           </div>
                                       </a>
                                   </li>
                                   @if (config('app.phone'))
                                       <li class="footer-contact-menu__item">
                                           <a href="tel:+8243944562" class="d-flex">
                                               <div class="footer-contact-menu__item-icon">
                                                   <i class="fa-solid fa-phone-volume"></i>
                                               </div>
                                               <div class="footer-contact-menu__item-content">
                                                   <p>{{ config('app.phone') }}</p>
                                               </div>
                                           </a>
                                       </li>
                                   @endif
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer Top End-->

       <!-- bottom Footer -->
       <div class="bottom-footer py-4">
           <div class="container">
               <div class="row gy-3">
                   <div class="col-md-5 order-1 order-md-0">
                       <div class="bottom-footer-text text-white order-1 order-md-0 text-center text-md-start">
                           <a href="{{ route('home') }}">{{ config('app.name') }}</a>
                           &copy; {{ date('Y') }}. All Rights Reserved.
                       </div>
                   </div>
                   <div class="col-md-7">
                       <nav class="d-flex justify-content-md-end gap-4 row-gap-2 justify-content-center flex-wrap">
                           <a href="{{ route('privacy') }}" class="fs-16 text-white">Privacy Policy</a>
                           <a href="{{ route('terms') }}" class="fs-16 text-white">Terms & Conditions</a>
                           <a href="{{ route('contact') }}" class="fs-16 text-white">Contact Us</a>
                       </nav>
                   </div>
               </div>
           </div>
       </div>
   </footer>
