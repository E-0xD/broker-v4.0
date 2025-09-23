 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="XTrady – A modern and professional template for Forex and stock trading businesses.">
 <meta name="keywords" content="Forex, Stock Broker, Trading Investments">

 <!-- Title -->
 <title>{{ config('app.name') }}</title>
 <!-- Favicon -->
 <link rel="shortcut icon" href="{{ asset('frontend/images/logo/favicon.ico') }}">

 @vite(['resources/css/app.css', 'resources/js/app.js'])
 @fluxAppearance
