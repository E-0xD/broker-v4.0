<x-layouts.guest>

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Frequently Asked Questions" :breadcrums="['FAQs']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  Pricing Section Start  ==========================-->
    <section class="pricing-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="pricing-shape d-none d-lg-block">
                <img src="{{ asset('frontend/svg/analysis-1.svg') }}" alt="star">
                <img src="{{ asset('frontend/svg/analysis-2.svg') }}" alt="star">
            </div>
            <div class="row row-gap-3">
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <h6 class="">Investment Plans</h6>
                        <h2 class="mb-0">Our Pricing Packages</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <p class="">
                            At {{ config('app.name') }}, we’ve designed flexible investment plans to match your
                            financial goals and risk appetite. Whether you’re just starting your journey
                            or scaling your portfolio, our plans provide the structure, tools, and
                            guidance you need to maximize growth and achieve sustainable returns.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-60 row-gap-4 justify-content-center">

                @foreach ($plans as $plan)
                    <div class="col-xl-4 col-lg-6 col-md-6 ">
                        <div class="pricing-content">
                            <div class="pricing-header">
                                <h6 class="mb-2">{{ $plan->title }}</h6>
                                <h2 class="mb-2">{{ $plan->daily_percentage }}%<sub class="fs-16 fw-normal">/Per
                                        Day</sub></h2>
                                <p>Free Advertisement</p>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    @foreach ($plan->benefits as $benefit)
                                        <li>{{ $benefit }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="{{ route('login') }}" class="btn btn--black-two">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--==========================  Pricing Section End  ==========================-->

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
                        <h6 class="">FAQ</h6>
                        <h2 class="">Answers to Common Questions</h2>
                        <p class="">
                            At <strong>{{ config('app.name') }}</strong>, we believe successful traders are made through
                            the right
                            tools, education,
                            and support. Our mission is simple: to empower you with the resources needed to trade
                            confidently.
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

</x-layouts.guest>
