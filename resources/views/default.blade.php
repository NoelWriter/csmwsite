<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>CSMW</title>
    <meta name="title" content="CSMW - A Website by CosmicWolf">
    <meta name="description"
          content="This website contains personal projects and information, including links to various social media and games such as Twitter, Discord and osu!. ">
    <meta property="image" content="{{ url('images/okami.jpg') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ url('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ url('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ url('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ url('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ url('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ url('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ url('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ url('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ url('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ url('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"></script>

    @yield('head')
</head>
<body class="wrap">
    <div class='triangle-background-weak'   data-aos-anchor-placement="top-bottom" data-aos="fade-down-right"   data-aos-duration="1000"    data-aos-delay="2000"></div>
    <div class='triangle-background-strong' data-aos-anchor-placement="top-bottom" data-aos="fade-down-right"   data-aos-duration="1000"    data-aos-delay="3000"></div>
    <div class='footer-two'                 data-aos-anchor-placement="top-bottom" data-aos="fade-up-left"    data-aos-duration="1000"    data-aos-delay="2000"></div>
    <div class='footer'                     data-aos-anchor-placement="top-bottom" data-aos="fade-up-left"    data-aos-duration="1000"    data-aos-delay="3000"></div>
    <div class="position-ref full-height">
        <div class="flex-center page-links">
            <div class="content">
                <div class="navbar links">
                    <a href="/" class="navbar-brand nav-item">狼</a>
                    <a href="/projects" class="nav-item">projects</a>
                    <a href="/commands" class="nav-item">commands</a>
                    <a href="/osu" class="nav-item">osu!</a>
                    <a href="https://github.com/noelwriter/" class="nav-item">github</a>
                    @guest
                        <a href="login" class="nav-link">login</a>
                    @else
                        <a href="logout" class="nav-link">logout</a>
                    @endguest
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>
<footer>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    @yield('script')
</footer>
</html>
