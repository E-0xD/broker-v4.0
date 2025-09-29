<x-layouts.guest>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Contact Us" :breadcrums="['Contact Us']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  Contact Section Start  ==========================-->
    <section class="contact-section bg--black-two py-120">
        <div class="container">
            <div class="row pb-120 row-gap-4 align-items-center">
                <div class="col-lg-5 order-1 order-lg-0">
                    <div class="contact-info">
                        <h3 class="mb-1">Contact Information</h3>
                        <p>For Inquiries regarding our services. Please submit using this</p>
                        <ul class="d-grid gap-3 mt-4 pt-lg-3">
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <p><a href="tel:{{ config('app.phone') }}">{{ config('app.phone') }}</a></p>
                            </li>
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <p><a
                                        href="mailto:{{ config('mail.from.address') }}"><span>{{ config('mail.from.address') }}</span></a>
                                </p>
                            </li>
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p>{{ config('app.address') }}</p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="enquiry-form">
                        <h3>Enquiry Form</h3>
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row row-gap-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="First Name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                                    @error('last_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    @error('email')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone">
                                    @error('phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Message"></textarea>
                                    @error('message')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="form-message"></div>
                                    <button type="submit" class="btn btn--base-two">
                                        Send Message <i class="flaticon-arrow-upper-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Contact Section Ends  ==========================-->

</x-layouts.guest>
