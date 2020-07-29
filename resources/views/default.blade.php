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
    @yield('content')
</body>
</html>
