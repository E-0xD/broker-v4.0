<x-layouts.guest>
    <!--==========================  Banner Section Start  ==========================-->
    <section class="banner-one-section bg--black">
        <div class="container position-relative">
            <div class="shape-icon d-none d-lg-block">
                <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="twostar">
                <img src="{{ asset('frontend/svg/star-4.svg') }}" alt="star">
                <img src="{{ asset('frontend/svg/star-4.svg') }}" alt="star">
            </div>
            <div class="row row-gap-5 justify-content-between">
                <div class="col-lg-7 align-self-center">
                    <div class="banner-content">
                        <h1 class="left-reveal">Experience Advanced <span class="text--base">Trading & Investment</span>
                            Solutions</h1>
                        <p class="left-reveal fs-18 fw-medium">Access global markets, real-time trading, and
                            professional investment opportunities. Start your journey to financial success with our
                            comprehensive platform.</p>
                        <div class="d-flex flex-wrap gap-4 mt-4">
                            <a href="{{ route('register') }}" class="btn btn--base-two left-reveal">
                                Create Account <i class="flaticon-arrow-upper-right"></i>
                            </a>
                            <a href="{{ route('login') }}" class="btn btn-outline--base left-reveal">
                                Login Now <i class="flaticon-arrow-upper-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="banner-img scaleUp">
                        <img src="{{ asset('frontend/images/banner/banner-img.png') }}" alt="Trading Platform"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Banner Section End  ==========================-->

    <!--==========================  About Section Start  ==========================-->
    <section class="about-section bg-dark py-120 text-white">
        <div class="container position-relative">
            <!-- Decorative Shapes -->
            <div class="about-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="decorative star">
                <img src="{{ asset('frontend/svg/star-1.svg') }}" alt="decorative star">
            </div>

            <div class="row g-5">
                <!-- Image -->
                <div class="col-xl-6 align-self-center">
                    <div class="about-img pe-xl-4">
                        <img src="{{ asset('frontend/images/about/about1.png') }}" alt="About {{ config('app.name') }}"
                            class="img-fluid rounded shadow">
                    </div>
                </div>

                <!-- Content -->
                <div class="col-xl-6 align-self-center">
                    <div class="section-content">
                        <h6 class="text-uppercase text-primary mb-3">About Us</h6>
                        <h2 class="fw-bold mb-4">Empowering Traders, One Step at a Time</h2>
                        <p>
                            At <strong>{{ config('app.name') }}</strong>, we believe great traders are built through
                            the right mix of
                            tools, education, and ongoing support. Our mission is to equip every client with
                            the resources they need to grow, succeed, and confidently navigate the
                            financial markets.
                        </p>
                    </div>

                    <!-- Stats -->
                    <div class="d-flex flex-wrap gap-4 my-4 my-lg-5">
                        <div class="info-box text-center">
                            <div class="fs-40 text-primary fw-bold">
                                <span class="odometer" data-odometer-final="10">10</span>+
                            </div>
                            <p class="mb-0">Years Experience</p>
                        </div>
                        <div class="info-box text-center">
                            <div class="fs-40 text-primary fw-bold">
                                <span class="odometer" data-odometer-final="10000">10</span>k+
                            </div>
                            <p class="mb-0">Satisfied Clients</p>
                        </div>
                    </div>

                    <!-- Button -->
                    <a href="{{ route('about') }}" class="btn btn-primary">
                        Explore More <i class="fa fa-arrow-up-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  About Section End  ==========================-->

    <!--==========================  Services Section Start  ==========================-->
    <section class="services-section bg--black py-120">
        <div class="container position-relative">
            <!-- Decorative Shapes -->
            <div class="services-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/balance-1.svg') }}" alt="decorative balance">
                <img src="{{ asset('frontend/svg/balance-2.svg') }}" alt="decorative balance">
            </div>

            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="text-uppercase text-primary mb-3 top-reveal">Services</h6>
                        <h2 class="fw-bold mb-4 top-reveal">Comprehensive Solutions <br class="d-none d-xl-block"> for
                            Every Trader</h2>
                        <p class="top-reveal">
                            At <strong>{{ config('app.name') }}</strong>, we provide a full suite of trading services
                            designed to
                            equip you with the right tools, insights, and strategies to succeed in today’s dynamic
                            markets.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Services Slider -->
            <div class="row mt-60 justify-content-center">
                <div class="col-12 position-relative bottom-reveal">
                    <div class="services-slider swiper">
                        <div class="swiper-wrapper">
                            <!-- Equity Trading -->
                            <div class="swiper-slide">
                                <div class="services-box">
                                    <div class="icon">
                                        <i class="flaticon-balance-sheet"></i>
                                    </div>
                                    <h3><a href="#">Equity Trading</a></h3>
                                    <p>
                                        Gain direct access to global equity markets and trade with speed,
                                        transparency, and highly competitive pricing.
                                    </p>
                                </div>
                            </div>
                            <!-- Market Analysis -->
                            <div class="swiper-slide">
                                <div class="services-box">
                                    <div class="icon">
                                        <i class="flaticon-chart"></i>
                                    </div>
                                    <h3><a href="#">Market Analysis</a></h3>
                                    <p>
                                        Stay ahead of the market with in-depth analysis, expert insights,
                                        and real-time reports tailored to traders of all levels.
                                    </p>
                                </div>
                            </div>
                            <!-- Forex Trading -->
                            <div class="swiper-slide">
                                <div class="services-box">
                                    <div class="icon">
                                        <i class="flaticon-forex"></i>
                                    </div>
                                    <h3><a href="#">Forex Trading</a></h3>
                                    <p>
                                        Trade major, minor, and exotic currency pairs with advanced tools,
                                        flexible leverage, and lightning-fast execution.
                                    </p>
                                </div>
                            </div>
                            <!-- Stock Market -->
                            <div class="swiper-slide">
                                <div class="services-box">
                                    <div class="icon">
                                        <i class="flaticon-chart-1"></i>
                                    </div>
                                    <h3><a href="#">Stock Market</a></h3>
                                    <p>
                                        Diversify your portfolio by investing in leading companies across
                                        top global stock exchanges with ease and reliability.
                                    </p>
                                </div>
                            </div>
                            <!-- Technical Analysis -->
                            <div class="swiper-slide">
                                <div class="services-box">
                                    <div class="icon">
                                        <i class="flaticon-graph"></i>
                                    </div>
                                    <h3><a href="#">Technical Analysis</a></h3>
                                    <p>
                                        Leverage powerful charting tools, technical indicators, and expert
                                        strategies to make informed trading decisions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                    <!-- Slider Controls -->
                    <div class="slider-btn">
                        <div class="btn-slider-prev services-prev">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="btn-slider-next services-next">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Services Section End  ==========================-->

    <!--==========================  Trade Section Start  ==========================-->
    <section class="trade-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="trade-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="star">
                <img src="{{ asset('frontend/svg/calculator.svg') }}" alt="calculator">
            </div>
            <div class="row row-gap-5">
                <div class="col-xl-6 align-self-center">
                    <div class="trade-img me-xl-4 scaleUp">
                        <img src="{{ asset('frontend/images/trade/trade.png') }}" alt="trade" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-6 align-self-center">
                    <div class="section-content">
                        <h6 class="right-reveal">Trade Smarter With</h6>
                        <h2 class="right-reveal">A Powerful, All-in-One Platform Designed for Every Investor</h2>
                        <p class="right-reveal">
                            At {{ config('app.name') }}, we understand that successful traders are built, not born.
                            That’s why we provide an advanced platform equipped with innovative tools, real-time
                            insights,
                            and a seamless trading experience. Our mission is to give you everything you need to trade
                            smarter, faster, and with greater confidence.
                        </p>
                    </div>
                    <ul class="trade-list py-4 mt-2 mb-3">
                        <li class="right-reveal">Full Forex Market Access</li>
                        <li class="right-reveal">Trade Commodities & Indices</li>
                        <li class="right-reveal">Live Market Data & Updates</li>
                        <li class="right-reveal">Global Stocks & Equities</li>
                        <li class="right-reveal">Wide Range of Crypto Pairs</li>
                        <li class="right-reveal">Advanced Analytics & Charting</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn btn--base-two right-reveal">
                        Sign Up Today <i class="flaticon-arrow-upper-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Trade Section End  ==========================-->

    <!--==========================  Number Section Start  ==========================-->
    <div class="number-section py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="number-count">
                        <div class="number-box left-reveal">
                            <div class="fs-60 fw-bold">
                                2.<span class="odometer" data-odometer-final="7">2</span>B
                            </div>
                            <p>Total Capital Invested</p>
                        </div>
                        <div class="number-box left-reveal">
                            <div class="fs-60 fw-bold">
                                <span class="odometer" data-odometer-final="860">660</span>+
                            </div>
                            <p>Professional Traders</p>
                        </div>
                        <div class="number-box left-reveal">
                            <div class="fs-60 fw-bold">
                                <span class="odometer" data-odometer-final="14">5</span>K
                            </div>
                            <p>Active Investors Worldwide</p>
                        </div>
                        <div class="number-box left-reveal">
                            <div class="fs-60 fw-bold">
                                <span class="odometer" data-odometer-final="130">100</span>+
                            </div>
                            <p>Industry Awards & Recognitions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==========================  Number Section End  ==========================-->

    <!--==========================  People Section Start  ==========================-->
    <section class="people-trust-section bg--black py-120">
        <div class="container position-relative">
            <div class="people-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="star">
                <img src="{{ asset('frontend/svg/balance-4.svg') }}" alt="star">
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">People Trust Us</h6>
                        <h2 class="top-reveal">Trusted by Millions Worldwide</h2>
                        <p class="top-reveal">{{ config('app.name') }} is built on transparency, innovation, and
                            trust.
                            Our mission is simple: to equip every trader with the tools, insights, and support
                            they need to succeed in today’s dynamic markets.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-5">
                    <ul class="nav nav-pills gap-4 justify-content-center" id="people-tab" role="tablist">
                        <li class="nav-item bottom-reveal" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#people-one"
                                role="tab">
                                <i class="flaticon-cam-recorder"></i> Test Your Knowledge
                            </button>
                        </li>
                        <li class="nav-item bottom-reveal" role="presentation">
                            <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#people-two"
                                role="tab">
                                <i class="flaticon-live-1"></i> Live Commentary
                            </button>
                        </li>
                        <li class="nav-item bottom-reveal" role="presentation">
                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#people-three"
                                role="tab">
                                <i class="flaticon-cam-recorder"></i> Tutorial Videos
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="col-12 mt-60">
                    <div class="tab-content bottom-reveal" id="people-tabContent">

                        <!-- Tab One -->
                        <div class="tab-pane fade" id="people-one" role="tabpanel" tabindex="0">
                            <a class="people-video video-container" href="https://www.youtube.com/watch?v=SjJhuZQlkbA"
                                data-fancybox>
                                <img src="{{ asset('frontend/images/video/video2.jpg') }}" alt="video">
                                <div class="play-button">
                                    <span class="play-icon"><i class="fa fa-solid fa-play"></i></span>
                                </div>
                            </a>
                            <div class="row mt-5 row-gap-5 justify-content-between">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="section-content">
                                        <h2>Sharpen Your Trading Skills</h2>
                                        <p>{{ config('app.name') }} helps you grow from beginner to confident trader
                                            through structured learning, expert strategies, and hands-on practice.
                                            Access real insights designed to accelerate your trading journey.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <ul class="people-list">
                                        <li>Forex Market Access</li>
                                        <li>Stock & Equity Trading</li>
                                        <li>Commodities & Indices</li>
                                        <li>Cryptocurrency Pairs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Two -->
                        <div class="tab-pane fade show active" id="people-two" role="tabpanel" tabindex="0">
                            <a class="people-video video-container" href="https://www.youtube.com/watch?v=SjJhuZQlkbA"
                                data-fancybox>
                                <img src="{{ asset('frontend/images/video/video1.jpg') }}" alt="video">
                                <div class="play-button">
                                    <span class="play-icon"><i class="fa fa-solid fa-play"></i></span>
                                </div>
                            </a>
                            <div class="row mt-5 row-gap-5 justify-content-between">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="section-content">
                                        <h2>Learn from Live Experts</h2>
                                        <p>{{ config('app.name') }} provides real-time commentary and expert analysis
                                            so you can trade smarter, faster, and with more confidence.
                                            Stay ahead of the markets with continuous live insights.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <ul class="people-list">
                                        <li>Forex Market Access</li>
                                        <li>Stock & Equity Trading</li>
                                        <li>Commodities & Indices</li>
                                        <li>Cryptocurrency Pairs</li>
                                    </ul>
                                    <div class="row mt-4 row-gap-4">
                                        <div class="col-6">
                                            <div class="people-box">
                                                <h2 class="fw-bold text--base mb-2">6.<span class="odometer"
                                                        data-odometer-final="9">2</span>M</h2>
                                                <p>Monthly Volume</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="people-box">
                                                <h2 class="fw-bold text--base mb-2">8.<span class="odometer"
                                                        data-odometer-final="5">0</span>M</h2>
                                                <p>Yearly Volume</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Three -->
                        <div class="tab-pane fade" id="people-three" role="tabpanel" tabindex="0">
                            <a class="people-video video-container" href="https://www.youtube.com/watch?v=SjJhuZQlkbA"
                                data-fancybox>
                                <img src="{{ asset('frontend/images/video/video3.jpg') }}" alt="video">
                                <div class="play-button">
                                    <span class="play-icon"><i class="fa fa-solid fa-play"></i></span>
                                </div>
                            </a>
                            <div class="row mt-5 row-gap-5 justify-content-between">
                                <div class="col-xl-5 col-lg-6">
                                    <div class="section-content">
                                        <h2>Step-by-Step Tutorials</h2>
                                        <p>{{ config('app.name') }} offers in-depth video tutorials covering everything
                                            from basics to advanced strategies. Learn at your own pace and apply
                                            proven techniques directly to your trades.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <ul class="people-list">
                                        <li>Forex Market Access</li>
                                        <li>Stock & Equity Trading</li>
                                        <li>Commodities & Indices</li>
                                        <li>Cryptocurrency Pairs</li>
                                    </ul>
                                    <div class="row mt-4 row-gap-4">
                                        <div class="col-6">
                                            <div class="people-box">
                                                <h2 class="fw-bold text--base mb-2">6.<span class="odometer"
                                                        data-odometer-final="9">2</span>M</h2>
                                                <p>Monthly Volume</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="people-box">
                                                <h2 class="fw-bold text--base mb-2">8.<span class="odometer"
                                                        data-odometer-final="5">0</span>M</h2>
                                                <p>Yearly Volume</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  People Section End  ==========================-->
    <!--==========================  Testimonial Section Start  ==========================-->
    <section class="testimonial-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="testimonial-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/twostar.svg') }}" alt="star">
                <img src="{{ asset('frontend/svg/maneyPlant.svg') }}" alt="money Plant">
            </div>
            <div class="row row-gap-2">
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <h6 class="right-reveal">Testimonial</h6>
                        <h2 class="mb-2 right-reveal">What Our Clients Say</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <p class="right-reveal">
                            At {{ config('app.name') }}, we pride ourselves on helping traders achieve more with the
                            right tools, strategies, and support. Here’s what our clients have to say about their
                            journey with us.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-60">
                <div class="col-12 position-relative bottom-reveal">
                    <div class="testimonial-slide swiper">
                        <div class="swiper-wrapper">

                            <!-- Testimonial Item 1 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{ asset('frontend/svg/star-5.svg') }}" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{ asset('frontend/svg/quite.svg') }}" alt="quote">
                                        <p class="client-text">
                                            “{{ config('app.name') }} has completely changed how I trade.
                                            Their platform is intuitive, and the resources helped me become
                                            more confident and profitable in the market.”
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{ asset('frontend/images/client/client1.png') }}"
                                                alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Robert Jenkins</h4>
                                                <p>Professional Trader</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 2 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{ asset('frontend/svg/star-5.svg') }}" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{ asset('frontend/svg/quite.svg') }}" alt="quote">
                                        <p class="client-text">
                                            “The support team is amazing. Whenever I had a question, they were
                                            quick to respond and guide me. I’ve never felt more supported in my trading
                                            journey.”
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{ asset('frontend/images/client/client2.png') }}"
                                                alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Johanna Dach</h4>
                                                <p>Financial Consultant</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 3 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{ asset('frontend/svg/star-5.svg') }}" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{ asset('frontend/svg/quite.svg') }}" alt="quote">
                                        <p class="client-text">
                                            “With {{ config('app.name') }}, I gained access to markets and tools
                                            I never had before. The advanced charts and real-time data are exactly
                                            what I needed to take my trading to the next level.”
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{ asset('frontend/images/client/client3.png') }}"
                                                alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Harvey Witting</h4>
                                                <p>Entrepreneur</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 4 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{ asset('frontend/svg/star-5.svg') }}" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{ asset('frontend/svg/quite.svg') }}" alt="quote">
                                        <p class="client-text">
                                            “I love the transparency and reliability of {{ config('app.name') }}.
                                            My trades are executed fast, and I feel secure knowing I’m using a trusted
                                            platform.”
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{ asset('frontend/images/client/client1.png') }}"
                                                alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Robert Jenkins</h4>
                                                <p>Investor</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item 5 -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="start-client">
                                        <img src="{{ asset('frontend/svg/star-5.svg') }}" alt="star">
                                    </div>
                                    <div class="client-body">
                                        <img src="{{ asset('frontend/svg/quite.svg') }}" alt="quote">
                                        <p class="client-text">
                                            “The educational materials and insights are top-notch.
                                            {{ config('app.name') }} isn’t just a platform—it’s a community
                                            where traders grow and succeed together.”
                                        </p>
                                        <div class="client-info d-flex gap-3 align-self-center">
                                            <img src="{{ asset('frontend/images/client/client2.png') }}"
                                                alt="client">
                                            <div class="text">
                                                <h4 class="mb-2">Johanna Dach</h4>
                                                <p>Urban Artist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="slider-btn">
                        <div class="btn-slider-prev testi-prev">
                            <i class="fa-solid fa-chevron-left"></i>
                        </div>
                        <div class="btn-slider-next testi-next">
                            <i class="fa-solid fa-chevron-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Testimonial Section End  ==========================-->

    <!--==========================  Faq Section Start  ==========================-->
    <section class="faq-section bg--black py-120">
        <div class="container position-relative">
            <div class="faq-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/bank.svg') }}" alt="bank">
                <img src="{{ asset('frontend/svg/balance-5.svg') }}" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">FAQ</h6>
                        <h2 class="top-reveal">Answers to Common Questions</h2>
                        <p class="top-reveal">
                            At <strong>{{ config('app.name') }}</strong>, we believe successful traders are made
                            through the right
                            tools, education,
                            and support. Our mission is simple: to empower you with the resources needed to trade
                            confidently.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-60 row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <img src="{{ asset('frontend/images/faq/faq.png') }}" alt="faq" class="img-fluid scaleUp">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordion custom--accordion" id="faqExample">

                        <!-- FAQ 1 -->
                        <div class="accordion-item bottom-reveal">
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
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    Can I practice on a demo account before trading live?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Yes! We provide a free demo account where you can explore the platform, test
                                        strategies, and build confidence before committing real funds.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item bottom-reveal">
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
                        <div class="accordion-item bottom-reveal">
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
                        <div class="accordion-item bottom-reveal">
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

</x-layouts.guest>
