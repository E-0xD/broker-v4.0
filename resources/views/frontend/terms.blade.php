<x-layouts.guest>
    <!-- ==================== Breadcrumb Start Here ==================== -->
    <x-layouts.guest.breadcrum title="Terms & Conditions" :breadcrums="['Terms & Conditions']" />
    <!-- ==================== Breadcrumb End Here ==================== -->
    <!--==========================  Terms & Conditions Section Start  ==========================-->
    <section class="privacy-section bg-dark py-120 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="privacy-content">
                        <h2><i class="fa fa-file-contract me-2"></i> {{ config('app.name') }} Trading Terms & Conditions
                        </h2>
                       

                        <div class="alert alert-warning mt-3">
                            <i class="fa fa-exclamation-triangle me-2"></i>
                            <strong>Important:</strong> Trading financial instruments involves significant risk. You may
                            lose part or all of your capital.
                        </div>

                        <h4 class="mt-5">1. Account Registration</h4>
                        <ol type="a">
                            <li>You must be at least 18 years old to register an account.</li>
                            <li>You agree to provide accurate and complete registration details.</li>
                            <li>You are responsible for protecting your login credentials.</li>
                            <li>We reserve the right to refuse or terminate accounts at our discretion.</li>
                        </ol>

                        <h4 class="mt-4">2. Trading Services</h4>
                        <ol type="a">
                            <li>{{ config('app.name') }} provides an online platform for financial trading.</li>
                            <li>Trades are executed at available market prices.</li>
                            <li>Trading limits or restrictions may apply.</li>
                            <li>Platform availability may be interrupted for maintenance.</li>
                        </ol>

                        <h4 class="mt-4">3. Risk Disclosure</h4>
                        <ol type="a">
                            <li>Trading carries a high risk of financial loss.</li>
                            <li>Past performance does not guarantee future results.</li>
                            <li>Leveraged products may magnify gains and losses.</li>
                            <li>You are solely responsible for trading decisions.</li>
                        </ol>

                        <h4 class="mt-4">4. Deposits & Withdrawals</h4>
                        <ol type="a">
                            <li>Minimum deposit requirements apply.</li>
                            <li>Withdrawals are processed within [X] business days.</li>
                            <li>Identity verification may be required before withdrawal.</li>
                            <li>Transaction fees may apply (see Fee Schedule).</li>
                        </ol>

                        <h4 class="mt-4">5. Prohibited Activities</h4>
                        <ul>
                            <li>Illegal activities or money laundering.</li>
                            <li>Market manipulation or abusive practices.</li>
                            <li>Sharing account access with others.</li>
                            <li>Unauthorized automated trading systems.</li>
                            <li>Hacking or reverse-engineering the platform.</li>
                        </ul>

                        <h4 class="mt-4">6. Intellectual Property</h4>
                        <ol type="a">
                            <li>All content, logos, and software belong to {{ config('app.name') }}.</li>
                            <li>You have a limited license to use the platform.</li>
                            <li>Reproduction without written permission is prohibited.</li>
                        </ol>

                        <h4 class="mt-4">7. Termination</h4>
                        <ol type="a">
                            <li>Either party may terminate this agreement with notice.</li>
                            <li>We may suspend or terminate accounts for violations.</li>
                            <li>Open positions may be closed upon termination.</li>
                        </ol>

                        <h4 class="mt-4">8. Limitation of Liability</h4>
                        <ol type="a">
                            <li>We are not liable for trading losses or market disruptions.</li>
                            <li>We are not responsible for technical failures beyond our control.</li>
                            <li>Maximum liability is limited to fees paid in the last 6 months.</li>
                        </ol>

                        <h4 class="mt-4">9. Dispute Resolution</h4>
                        <ol type="a">
                            <li>Disputes must first go through customer support.</li>
                            <li>Unresolved disputes may proceed to arbitration in [Jurisdiction].</li>
                            <li>Class action participation is waived.</li>
                        </ol>

                        <h4 class="mt-4">10. Governing Law</h4>
                        <p>These Terms are governed by the laws of [Jurisdiction].</p>

                        <h4 class="mt-4">11. Amendments</h4>
                        <p>We may update these Terms at any time. Continued use means acceptance of changes.</p>

                        <h4 class="mt-4">12. Contact Information</h4>
                        <p>
                            {{ config('app.name') }} Trading<br>
                            <i class="fa fa-envelope me-2"></i> Email: <a href="mailto:support@example.com"
                                class="text-white">support@example.com</a><br>
                            <i class="fa fa-phone me-2"></i> Phone: (+1) 824 394 4562
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================  Terms & Conditions Section End  ==========================-->

</x-layouts.guest>
