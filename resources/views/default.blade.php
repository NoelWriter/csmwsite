<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>CSMW</title>
    <meta name="title" content="CSMW - A Website by CosmicWolf">
    <meta name="description" content="This website contains personal projects and information, including links to various social media and games such as Twitter, Discord and osu!. ">
    <meta property="image" content="{{ url('images/okami.jpg') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="css/app.css" rel="stylesheet">

</head>
<body>
    <div class="position-ref full-height">
        <div class="flex-center page-links">
            <div class="content">
                <div class="navbar links">
                    <a href="/" class="navbar-brand" href="#" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="300">狼</a>
                    <a href="/osu" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="600">osu!</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="900">projects</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1200">discord</a>
                    <a href="" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="1500">twitter</a>
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
