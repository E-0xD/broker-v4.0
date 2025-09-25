 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="{{ config('app.description') }}">

 <!-- Title -->
 <title>{{ config('app.name') }}</title>
 <!-- Favicon -->
 <link rel="shortcut icon" href="{{ asset(config('app.favicon')) }}">

 @include('partials.google_translator')

 {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
 {{-- @fluxAppearance --}}

