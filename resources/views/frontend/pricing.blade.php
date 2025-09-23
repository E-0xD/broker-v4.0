<x-layouts.guest>


    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Frequently Asked Questions" :breadcrums="['FAQs']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  Pricing Section Start  ==========================-->
    <section class="pricing-section bg--black-two py-120">
        <div class="container position-relative">
            <div class="pricing-shape d-none d-lg-block">
                <img src="{{asset('frontend/svg/analysis-1.svg')}}" alt="star">
                <img src="{{asset('frontend/svg/analysis-2.svg')}}" alt="star">
            </div>
            <div class="row row-gap-3 ">
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <h6 class="right-reveal">Pricing Plan</h6>
                        <h2 class="mb-0 right-reveal">Our Pricing Plan</h2>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end">
                    <div class="section-content">
                        <p class="right-reveal">Trade Mastery, we believe great traders aren't born they’re
                            built through
                            the right tools,
                            education, and support. Our mission is simple: to empower every client with the
                            resources they
                            need to grow, succeed, and master.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-4 justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="pricing-content">
                        <div class="pricing-header">
                            <h6 class="mb-2">Basic Plan</h6>
                            <h2 class="mb-2">$65<sub class="fs-16 fw-normal">/Per Month</sub></h2>
                            <p>Free Advertisement</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Basic charting economic calendar</li>
                                <li>Web Trader & Mobile</li>
                                <li>Negative balance protection</li>
                                <li>Swap Free Option Available</li>
                                <li>Email Support Only</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('login')}}" class="btn btn--black-two">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="pricing-content">
                        <div class="pricing-header">
                            <h6 class="mb-2">Standard Plan</h6>
                            <h2 class="mb-2">$130<sub class="fs-16 fw-normal">/Per Month</sub></h2>
                            <p>Free Advertisement</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Basic charting economic calendar</li>
                                <li>Web Trader & Mobile</li>
                                <li>Negative balance protection</li>
                                <li>Swap Free Option Available</li>
                                <li>Email Support Only</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('login')}}" class="btn btn--black-two">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="pricing-content">
                        <div class="pricing-header">
                            <h6 class="mb-2">Premium Plan</h6>
                            <h2 class="mb-2">$199<sub class="fs-16 fw-normal">/Per Month</sub></h2>
                            <p>Free Advertisement</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Basic charting economic calendar</li>
                                <li>Web Trader & Mobile</li>
                                <li>Negative balance protection</li>
                                <li>Swap Free Option Available</li>
                                <li>Email Support Only</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('login')}}" class="btn btn--black-two">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="pricing-content">
                        <div class="pricing-header">
                            <h6 class="mb-2">Enterprise Plan</h6>
                            <h2 class="mb-2">$299<sub class="fs-16 fw-normal">/Per Month</sub></h2>
                            <p>Free Advertisement</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Basic charting economic calendar</li>
                                <li>Web Trader & Mobile</li>
                                <li>Negative balance protection</li>
                                <li>Swap Free Option Available</li>
                                <li>Email Support Only</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('login')}}" class="btn btn--black-two">Choose Plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 bottom-reveal">
                    <div class="pricing-content">
                        <div class="pricing-header">
                            <h6 class="mb-2">Ultimate Plan</h6>
                            <h2 class="mb-2">$399<sub class="fs-16 fw-normal">/Per Month</sub></h2>
                            <p>Free Advertisement</p>
                        </div>
                        <div class="pricing-body">
                            <ul>
                                <li>Basic charting economic calendar</li>
                                <li>Web Trader & Mobile</li>
                                <li>Negative balance protection</li>
                                <li>Swap Free Option Available</li>
                                <li>Email Support Only</li>
                            </ul>
                        </div>
                        <div class="pricing-footer">
                            <a href="{{route('login')}}" class="btn btn--black-two">Choose Plan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Pricing Section End  ==========================-->


    <!--==========================  Faq Section Start  ==========================-->
    <section class="faq-section bg--black py-120">
        <div class="container position-relative">
            <div class="faq-shape d-none d-lg-block">
                <img src="{{asset('frontend/svg/bank.svg')}}" alt="bank">
                <img src="{{asset('frontend/svg/balance-5.svg')}}" alt="balance">
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8">
                    <div class="section-content text-center">
                        <h6 class="top-reveal">Faq</h6>
                        <h2 class="top-reveal">Frequently Asked Questions</h2>
                        <p class="top-reveal">Trade Mastery, we believe great traders aren't born they’re built
                            through the right tools, education, and support. Our mission is simple: to empower.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mt-60 row-gap-5">
                <div class="col-lg-6 align-self-center">
                    <img src="{{asset('frontend/images/faq/faq.png')}}" alt="faq" class="img-fluid scaleUp">
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="accordion custom--accordion" id="faqExample">
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqOne" aria-expanded="false" aria-controls="faqOne">
                                    What is the minimum deposit to start trading?
                                </button>
                            </h2>
                            <div id="faqOne" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqTwo" aria-expanded="true" aria-controls="faqTwo">
                                    Do you offer a demo account for practice trading?
                                </button>
                            </h2>
                            <div id="faqTwo" class="accordion-collapse collapse show"
                                data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                    What platforms can I use to trade with your broker?
                                </button>
                            </h2>
                            <div id="faqThree" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                    Are my funds secure with your company?
                                </button>
                            </h2>
                            <div id="faqFour" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bottom-reveal">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                    What trading instruments do you offer?
                                </button>
                            </h2>
                            <div id="faqFive" class="accordion-collapse collapse" data-bs-parent="#faqExample">
                                <div class="accordion-body">
                                    <p>
                                        Trade Mastery, we believe is the great traders aren't born they’re built
                                        through the right tools, education, and support. Our mission is simple
                                        to empower every client with the resources.
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
