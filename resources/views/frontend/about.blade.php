<x-layouts.guest>

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="About Us" :breadcrums="['About Us']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  About Section Start  ==========================-->
    <section class="about-section bg--black-two py-5">
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

              <div class="row mt-60 row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <img src="{{ asset('frontend/images/faq/faq.png') }}" alt="faq" class="img-fluid">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordion custom--accordion" id="faqExample">

                        <!-- FAQ 1 -->
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                                    What’s the minimum amount required to begin trading?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        You can start with as little as our platform’s entry-level deposit. We keep
                                        barriers low so you can begin learning and trading without unnecessary pressure.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    Can I practice on a demo account before trading live?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse show" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes! We provide a free demo account where you can explore the platform, test
                                        strategies, and build confidence before committing real funds.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    Which platforms are available for trading?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Our services are accessible across web, desktop, and mobile apps, giving you the
                                        flexibility to trade anytime, anywhere.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    How safe are my funds with {{ config('app.name') }}?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Security is our top priority. We use advanced encryption, strict compliance
                                        measures, and trusted payment gateways to protect your funds at all times.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item ">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                    Which markets and instruments can I trade?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        We offer a wide range of instruments including forex, cryptocurrencies, stocks,
                                        indices, and commodities — giving you multiple opportunities to diversify your
                                        portfolio.
                                    </p>
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
                        <h6 class="">Our Team</h6>
                        <h2 class="">Meet Our Advisers</h2>
                        <p class="">Trade Mastery, we believe great traders aren't born they’re
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
                      
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--==========================  Team Section End  ==========================-->


</x-layouts.guest>
