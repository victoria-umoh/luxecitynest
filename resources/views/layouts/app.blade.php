<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- basic -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <!-- site metas -->
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        <link rel="icon" href="{{ asset('/adminassets/assets/images/fevicon.png') }}" type="image/png" />
        {{-- <link rel="icon" href="adminassets/assets/images/fevicon.png" type="image/png" /> --}}
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/bootstrap.min.css') }}" />
        {{-- <link rel="stylesheet" href="adminassets/assets/css/bootstrap.min.css" /> --}}

        <!-- site css -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/style.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/style.css" /> --}}
        <!-- responsive css -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/responsive.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/css/responsive.css" /> --}}
        <!-- color css -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/colors.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/css/colors.css" /> --}}
        <!-- select bootstrap -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/bootstrap-select.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/css/bootstrap-select.css" /> --}}
        <!-- scrollbar css -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/perfect-scrollbar.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/css/perfect-scrollbar.css" /> --}}
        <!-- custom css -->
            <link rel="stylesheet" href="{{ asset('/adminassets/assets/css/custom.css') }}" />
            {{-- <link rel="stylesheet" href="adminassets/assets/css/custom.css" /> --}}
        {{-- [if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif] --}}
        <title>{{ config('app.name', 'LuxeCityNest') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <base href="/public">
    </head>
    <body class="font-sans antialiased dashboard dashboard_1">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


          <!-- jQuery -->
          <script src="{{ asset('/adminassets/assets/js/jquery.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/jquery.min.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/popper.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/popper.min.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/bootstrap.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/bootstrap.min.js"></script> --}}
          <!-- wow animation -->
          <script src="{{ asset('/adminassets/assets/js/animate.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/animate.js"></script> --}}
          <!-- select country -->
          <script src="{{ asset('/adminassets/assets/js/bootstrap-select.js') }}"></script>
          {{-- <script src="adminassets/assets/js/bootstrap-select.js"></script> --}}
          <!-- owl carousel -->
          <script src="{{ asset('/adminassets/assets/js/owl.carousel.js') }}"></script>
          {{-- <script src="adminassets/assets/js/owl.carousel.js"></script> --}}
          <!-- chart js -->
          <script src="{{ asset('/adminassets/assets/js/Chart.bundle.js') }}"></script>
          {{-- <script src="adminassets/assets/js/Chart.min.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/Chart.bundle.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/Chart.bundle.min.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/utils.js') }}"></script>
          {{-- <script src="adminassets/assets/js/utils.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/analyser.js') }}"></script>
          {{-- <script src="adminassets/assets/js/analyser.js"></script> --}}
          <!-- nice scrollbar -->
          <script src="{{ asset('/adminassets/assets/js/perfect-scrollbar.min.js') }}"></script>
          {{-- <script src="adminassets/assets/js/perfect-scrollbar.min.js"></script> --}}
          <script> var ps = new PerfectScrollbar('#sidebar'); </script>
          <!-- custom js -->
          <script src="{{ asset('/adminassets/assets/js/custom.js') }}"></script>
          {{-- <script src="adminassets/assets/js/custom.js"></script> --}}
          <script src="{{ asset('/adminassets/assets/js/chart_custom_style1.js') }}"></script>
          {{-- <script src="adminassets/assets/js/chart_custom_style1.js"></script> --}}
    </body>
</html>
