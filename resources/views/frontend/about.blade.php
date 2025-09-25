<x-layouts.guest>

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="About Us" :breadcrums="['About Us']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  About Section Start  ==========================-->
    <section class="about-section bg-light py-5">
        <div class="container position-relative">
            <div class="row align-items-center gy-5">

                <!-- Image Section -->
                <div class="col-xl-6 text-center">
                    <img src="{{ asset('frontend/images/about/about1.png') }}" alt="About our trading platform"
                        class="img-fluid rounded shadow">
                </div>

                <!-- Content Section -->
                <div class="col-xl-6">
                    <div class="section-content">
                        <h6 class="text-uppercase text-primary mb-2">
                            <i class="fa fa-info-circle me-2"></i> About Us
                        </h6>
                        <h2 class="fw-bold mb-4">Your Reliable Gateway to Smarter Trading</h2>
                        <p class="text-muted">
                            Discover a next-generation trading platform built to empower investors at every level.
                            We blend cutting-edge technology with an intuitive interface, giving you seamless
                            access to global markets. From cryptocurrencies and stocks to forex trading, our
                            platform delivers secure, diverse, and profitable opportunities to help you reach
                            your financial ambitions with confidence.
                        </p>
                    </div>

                    <!-- Info Boxes -->
                    <div class="d-flex flex-wrap gap-4 mt-4">
                        <div class="info-box text-center">
                            <div class="fs-2 text-primary fw-bold">
                                <i class="fa fa-headset me-2"></i> 24/7
                            </div>
                            <p class="mb-0">Trading Support</p>
                        </div>
                        <div class="info-box text-center">
                            <div class="fs-2 text-primary fw-bold">
                                <i class="fa fa-chart-line me-2"></i> 100+
                            </div>
                            <p class="mb-0">Trading Pairs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--==========================  About Section End  ==========================-->

    <!--==========================  Faq Section Start  ==========================-->
    <section class="faq-section bg--black-two  py-5">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center mb-5">
                        <h6 class="text-uppercase text-primary">
                            <i class="fa fa-question-circle me-2"></i> FAQ
                        </h6>
                        <h2 class="fw-bold">Frequently Asked Questions</h2>
                        <p class="text-muted">
                            At <strong>Trade Mastery</strong>, we believe successful traders are built through
                            knowledge, tools, and guidance. Here are answers to the most common questions we receive.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-5">
                <!-- Image -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('frontend/images/faq/faq.png') }}" alt="FAQ illustration"
                        class="img-fluid rounded shadow">
                </div>

                <!-- Accordion -->
                <div class="col-lg-6">
                    <div class="accordion" id="faqAccordion">

                        <!-- Q1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                                    <i class="fa fa-wallet me-2 text-primary"></i>
                                    What is the minimum deposit to start trading?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can begin trading with as little as <strong>$100</strong>.
                                    This allows you to test our platform with a modest investment
                                    while exploring our features and tools.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    <i class="fa fa-chalkboard-teacher me-2 text-primary"></i>
                                    Do you offer a demo account for practice trading?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes! We provide a <strong>free demo account</strong> so you can
                                    practice trading in real-time conditions without risking your capital.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    <i class="fa fa-laptop me-2 text-primary"></i>
                                    What platforms can I use to trade with your broker?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Our platform is accessible on <strong>web browsers, iOS, and Android apps</strong>,
                                    ensuring you can trade anytime, anywhere.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    <i class="fa fa-lock me-2 text-primary"></i>
                                    Are my funds secure with your company?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Absolutely. We use <strong>bank-level encryption, segregated client accounts,
                                        and regulatory compliance</strong> to keep your funds safe.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                    <i class="fa fa-chart-line me-2 text-primary"></i>
                                    What trading instruments do you offer?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer a wide range of markets including
                                    <strong>cryptocurrencies, forex, commodities, indices, and stocks</strong>—giving
                                    you
                                    diverse opportunities to trade.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================  Faq Section End  ==========================-->

    <!--==========================   Text-slide Start  ==========================-->
    <div class="text-slide-section py-3 bg--base">
        <div class="text-slide swiper">
            <div class="swiper-wrapper slide-transition">
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        STOCK TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        FOREX TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        FOREX TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-text-black">
                        CRYPTO TRADING
                    </div>
                </div>
                <div class="swiper-slide inner-slide-element">
                    <div class="slide-icon">
                        <img src="{{ asset('frontend/svg/star-2.svg') }}" alt="star">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================  Text-slide End  ==========================-->

    <!--==========================  Team Section Start  ==========================-->
    <section class="team-section bg--black py-120">
        <div class="container position-relative">
            <div class="services-two-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/bank.svg') }}" alt="balance">
                <img src="{{ asset('frontend/svg/balance-5.svg') }}" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Our Team</h6>
                        <h2 class="top-reveal">Meet Our Advisers</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through the
                            right tools, education, and support. Our mission is simple: to empower.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-4 justify-content-center">
                <div class="col-12">
                    <div class="team-slide swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{ asset('frontend/images/team/team1.jpg') }}" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Jonson Smith</a></h4>
                                        <p>Chief Trading Officer</p>
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
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{ asset('frontend/images/team/team2.jpg') }}" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Emily Johnson</a></h4>
                                        <p>Risk Management Specialist</p>
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
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{ asset('frontend/images/team/team3.jpg') }}" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Michael Brown</a></h4>
                                        <p>Market Analyst</p>
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
                            </div>
                            <div class="swiper-slide">
                                <div class="team-item">
                                    <a href="#" class="team-img">
                                        <img src="{{ asset('frontend/images/team/team4.jpg') }}" alt="team"
                                            class="img-fluid w-100">
                                    </a>
                                    <div class="team-content">
                                        <h4 class="mb-1"><a href="#">Sarah Williams</a></h4>
                                        <p>Investment Advisor</p>
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
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==========================  Team Section End  ==========================-->

    <!--==========================  Testimonial Section Start  ==========================-->
    <section class="testimonial-section bg--black-two  py-5">
        <div class="container position-relative">

            <!-- Section Heading -->
            <div class="row gy-3 align-items-end">
                <div class="col-lg-6">
                    <div class="section-content">
                        <h6 class="text-uppercase text-primary">
                            <i class="fa fa-comments me-2"></i> Testimonials
                        </h6>
                        <h2 class="fw-bold mb-2">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="text-muted">
                        At <strong>Trade Mastery</strong>, our mission is to equip every trader with the right
                        tools, knowledge, and support to succeed. Here’s what our clients are saying
                        about their journey with us.
                    </p>
                </div>
            </div>

            <!-- Slider -->
            <div class="row mt-5">
                <div class="col-12 position-relative">
                    <div class="testimonial-slide swiper">
                        <div class="swiper-wrapper">

                            <!-- Testimonial 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item p-4 bg-white rounded shadow-sm">
                                    <div class="mb-3">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p class="client-text fst-italic">
                                        “The platform is intuitive and reliable. I started small, and within months
                                        I felt confident in my trading decisions.”
                                    </p>
                                    <div class="client-info d-flex align-items-center mt-3">
                                        <img src="{{ asset('frontend/images/client/client1.png') }}" alt="client"
                                            class="rounded-circle" width="60">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Robert Jenkins</h5>
                                            <small class="text-muted">Urban Designer</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item p-4 bg-white rounded shadow-sm">
                                    <div class="mb-3">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p class="client-text fst-italic">
                                        “The demo account gave me the confidence to move into live trading.
                                        Their support team is fantastic.”
                                    </p>
                                    <div class="client-info d-flex align-items-center mt-3">
                                        <img src="{{ asset('frontend/images/client/client2.png') }}" alt="client"
                                            class="rounded-circle" width="60">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Johanna Dach</h5>
                                            <small class="text-muted">Digital Artist</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item p-4 bg-white rounded shadow-sm">
                                    <div class="mb-3">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                    </div>
                                    <p class="client-text fst-italic">
                                        “Secure, transparent, and easy to use. Trade Mastery has changed
                                        the way I look at investing.”
                                    </p>
                                    <div class="client-info d-flex align-items-center mt-3">
                                        <img src="{{ asset('frontend/images/client/client3.png') }}" alt="client"
                                            class="rounded-circle" width="60">
                                        <div class="ms-3">
                                            <h5 class="mb-1">Harvey Witting</h5>
                                            <small class="text-muted">Financial Analyst</small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination mt-4"></div>
                    </div>

                    <!-- Slider Navigation -->
                    <div class="slider-btn">
                        <div class="btn-slider-prev testi-prev">
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <div class="btn-slider-next testi-next">
                            <i class="fa fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Testimonial Section End  ==========================-->

</x-layouts.guest>
