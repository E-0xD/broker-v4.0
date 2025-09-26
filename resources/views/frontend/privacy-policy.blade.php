<x-layouts.guest>

    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Privacy & Policy" :breadcrums="['Privacy & Policy']" />
    <!-- ==================== Breadcrumb End Here ==================== -->

    <!--==========================  Privacy Section Start  ==========================-->
    <section class="privacy-section bg--black-two py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="privacy-content">
                        <h2>{{ config('app.name') }} Privacy Policy</h2>

                        <!-- Intro -->
                        <div class="section">
                            <p>
                                At <strong>{{ config('app.name') }}</strong>, we are committed to protecting your privacy. This
                                Privacy Policy explains
                                how we collect, use, disclose, and safeguard your personal and financial information
                                when you use our trading platform.
                            </p>
                        </div>

                        <!-- 1 -->
                        <h4 class="mb-2 mt-4">1. Information We Collect</h4>
                        <div class="section">
                            <ul>
                                <li><strong>Personal Data:</strong> Name, date of birth, address, phone, email,
                                    government ID</li>
                                <li><strong>Financial Data:</strong> Bank details, card info, trading history, tax IDs
                                </li>
                                <li><strong>Technical Data:</strong> IP address, device, browser, operating system</li>
                                <li><strong>Usage Data:</strong> Trading activity, preferences, session duration,
                                    visited pages</li>
                                <li><strong>KYC Documents:</strong> Proof of identity, residence, source of funds</li>
                            </ul>
                        </div>

                        <!-- 2 -->
                        <h4 class="mb-2 mt-4">2. How We Use Your Information</h4>
                        <div class="section">
                            <ul>
                                <li>Provide and manage trading services</li>
                                <li>Verify identity (KYC/AML compliance)</li>
                                <li>Process transactions and payments</li>
                                <li>Improve platform features</li>
                                <li>Communicate account updates</li>
                                <li>Detect and prevent fraud</li>
                                <li>Personalize your trading experience</li>
                                <li>Meet regulatory requirements</li>
                            </ul>
                        </div>

                        <!-- 3 -->
                        <h4 class="mb-2 mt-4">3. Data Sharing & Disclosure</h4>
                        <div class="section">
                            <ul>
                                <li>Regulators and law enforcement (where required)</li>
                                <li>Payment providers and financial institutions</li>
                                <li>Third-party service providers (hosting, support)</li>
                                <li>Corporate affiliates and subsidiaries</li>
                                <li>In case of mergers or acquisitions</li>
                            </ul>
                            <p class="pt-3"><em>We never sell your personal information to third parties for
                                    marketing.</em></p>
                        </div>

                        <!-- 4 -->
                        <h4 class="mb-2 mt-4">4. Data Security</h4>
                        <div class="section">
                            <ul>
                                <li>Encryption (in transit & at rest)</li>
                                <li>SSL technology</li>
                                <li>Two-factor authentication (2FA)</li>
                                <li>Regular audits</li>
                                <li>Restricted data access</li>
                            </ul>
                        </div>

                        <!-- 5 -->
                        <h4 class="mb-2 mt-4">5. Your Rights</h4>
                        <div class="section">
                            <p>You may have the right to:</p>
                            <ul>
                                <li>Access your data</li>
                                <li>Request corrections or deletion</li>
                                <li>Restrict or object to processing</li>
                                <li>Request data portability</li>
                                <li>Withdraw consent</li>
                            </ul>
                            <p class="pt-3">To exercise these rights, contact our support team at {{config('mail.from.address')}}.</p>
                        </div>

                        <!-- 6 -->
                        <h4 class="mb-2 mt-4">6. Cookies & Tracking</h4>
                        <div class="section">
                            <p>We use cookies to:</p>
                            <ul>
                                <li>Authenticate users</li>
                                <li>Remember preferences</li>
                                <li>Analyze usage</li>
                                <li>Enhance security</li>
                            </ul>
                            <p class="pt-3">You can manage cookies via your browser settings.</p>
                        </div>

                        <!-- 7 -->
                        <h4 class="mb-2 mt-4">7. International Data Transfers</h4>
                        <div class="section">
                            <p>Your data may be processed outside your jurisdiction. Safeguards include:</p>
                            <ul>
                                <li>Standard contractual clauses</li>
                                <li>Adequacy decisions</li>
                                <li>Other lawful safeguards</li>
                            </ul>
                        </div>

                        <!-- 8 -->
                        <h4 class="mb-2 mt-4">8. Changes to This Policy</h4>
                        <div class="section">
                            <p>We may update this Privacy Policy from time to time. Major updates will be shared via
                                platform notices or email.</p>
                        </div>

                        <!-- 9 -->
                        <h4 class="mb-2 mt-4">9. Contact Us</h4>
                        <div class="section">
                            <p>If you have questions about this Privacy Policy, contact us at:</p>
                            <p>
                                {{ config('app.name') }}<br>
                                Email: <a
                                    href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a><br>
                                Phone: {{config('app.phone')}}
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Privacy Section End  ==========================-->

</x-layouts.guest>
