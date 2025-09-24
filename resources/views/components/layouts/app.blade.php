<!DOCTYPE html>
<html lang="en">

    <head>

        @include('partials.head')

        <!-- Theme Config Js -->
        <script src="{{ asset('dashboard/js/config.js') }}"></script>

        <!-- Vendor css -->
        <link href="{{ asset('dashboard/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            <!-- Sidenav Menu Start -->
            <x-layouts.app.admin-sidebar />
            <!-- Sidenav Menu End -->

            <!-- Topbar Start -->
            <x-layouts.app.header />
            <!-- Topbar End -->


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="page-content">

                <div class="page-container">

                    {{ $slot }}
                </div>

                <!-- Footer Start -->
                <x-layouts.app.footer />
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->

        <!-- Vendor js -->
        <script src="{{ asset('dashboard/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard/js/app.js') }}"></script>

        <!-- Apex Chart js -->
        <script src="{{ asset('dashboard/vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Wallet Dashboard js -->
        <script src="{{ asset('dashboard/js/pages/dashboard-wallet.js') }}"></script>

        @include('sweetalert::alert')

    </body>

</html>
