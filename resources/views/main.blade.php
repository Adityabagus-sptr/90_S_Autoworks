<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:image" content="{{ asset('images/logo_logo.png') }}" />
    <meta property="og:url" content="https://www.90sautoworks.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="90's Autoworks" />
    <meta property="og:description" content="90's Autoworks adalah industri layanan perawatan otomotif serba ada" />
    <meta property="og:logo" content="{{ asset('images/logo_logo.png') }}" />
    <meta property="title" content="90's Autoworks" />
    <meta property="description" content="90's Autoworks adalah industri layanan perawatan otomotif serba ada" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&amp;display=swap" rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=clash-grotesk@400,300,500&amp;display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/tailwind/tailwind.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tailwind/tailwind.min.css') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo.png') }}" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js" defer="defer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @stack('css')
    @stack('head')
</head>

<body class="antialiased bg-body text-body font-body">
    <div style="font-family: Montserrat;">
        @yield('content')
    </div>

    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>

    @stack('script')
</body>

</html>
