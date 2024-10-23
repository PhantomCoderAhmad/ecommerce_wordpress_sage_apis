<!doctype html>
<html @php(language_attributes())>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Asset Links -->
    <link href="{{ asset('assets/aos/aos.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    @php(do_action('get_header'))
    @php(wp_head())
</head>

<body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
        @include('sections.header')

        <main id="main" class="main">
            @yield('content')
        </main>

        @include('sections.footer')
    </div>

    @php(do_action('get_footer'))
    @php(wp_footer())

    <!-- JavaScript Files -->
    <script src="{{ asset('assets/purecounter/purecounter_vanilla.js') }}"></script> 
    <script src="{{ asset('assets/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/waypoints/noframework.waypoints.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
