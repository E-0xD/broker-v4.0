<x-layouts.guest>
     <div class="error-section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="error-content text-center">
                                <div class="error-img">
                                    <img src="{{asset('frontend/images/error/404.png')}}" alt="404 error image" class="img-fluid">
                                </div>
                                <p class="py-4">The link you’re trying to access is probably broken, or the <br
                                        class="d-none d-md-block"> page has
                                    been
                                    removed.</p>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('home')}}" class="btn btn--base-two">
                                        Back To Home
                                        <i class="flaticon-arrow-upper-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</x-layouts.guest>