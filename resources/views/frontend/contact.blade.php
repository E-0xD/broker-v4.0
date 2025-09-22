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
                        <p>For Business Plan Submissions. Please submit using this</p>
                        <ul class="d-grid gap-3 mt-4 pt-lg-3">
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                </div>
                                <p><a href="tel:+8243944562">(+1) 824 394 4562</a></p>
                            </li>
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <p><a href="mailto:{{config('mail.from.address')}}"><span>{{config('mail.from.address')}}</span></a>
                                </p>
                            </li>
                            <li class="d-flex gap-2">
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <p>New Street 243 West Victoria Vip Road 3527 Canada</p>
                            </li>
                        </ul>
                        <h3 class="mb-1 mt-4 pt-lg-4">Social Media Links</h3>
                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="https://www.linkedin.com/" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="https://www.twitter.com/" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="enquiry-form">
                        <h3>Enquiry Form</h3>
                        <form id="contact-form" action=""
                            method="post">
                            <div class="row row-gap-4">
                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="First Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
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
            <div class="row">
                <div class="col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2822.7806761080233!2d-93.29138368446431!3d44.96844997909819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52b32b6ee2c87c91%3A0xc20dff2748d2bd92!2sWalker+Art+Center!5e0!3m2!1sen!2sus!4v1514524647889"
                        allowfullscreen class="contact-map">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Contact Section Ends  ==========================-->

</x-layouts.guest>
