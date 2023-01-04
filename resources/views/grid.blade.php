<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description', 'Test')">
    <meta name="author" content="@yield('author', 'Marius')">

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="icon" href="{{ vite_asset('resources/img/icons/icons8-home.svg') }}">

    <link rel="stylesheet" type="text/css" href="{{ vite_asset('resources/scss/main.scss') }}">
</head>

<body>

@yield('content')

<script src="{{ vite_asset('resources/js/index.js') }}"></script>
</body>
</html>
