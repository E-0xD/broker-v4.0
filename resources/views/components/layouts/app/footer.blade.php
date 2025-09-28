 <footer class="footer">
     <div class="page-container">
         <div class="row">
             <div class="col-md-6 text-center text-md-start">
                 {{ date('Y') }} © {{ config('app.name') }}</span>
             </div>
             <div class="col-md-6">
                 <div class="text-md-end footer-links d-none d-md-block">
                     <a href="{{ route('about') }}">About</a>
                     <a href="{{ route('contact') }}">Contact Us</a>
                 </div>
             </div>
         </div>
     </div>
 </footer>
