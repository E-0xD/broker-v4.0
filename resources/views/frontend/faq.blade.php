<x-layouts.guest>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Frequently Asked Questions" :breadcrums="['FAQs']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

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
                            At <strong>{{ config('app.name') }}</strong>, we believe successful traders are made through the right
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
