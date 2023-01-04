<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="author" content="@yield('author')">

    <meta property="og:title" content="@yield('ogTitle')">
    <meta property="og:type" content="@yield('ogType')">
    <meta property="og:url" content="@yield('ogUrl')">
    <meta property="og:description" content="@yield('ogDescription')">
    <meta property="og:image" content="@yield('ogImage')">

    <link rel="icon" href="{{ vite_asset('resources/img/icons/icons8-home.svg') }}">

    <link rel="stylesheet" type="text/css" href="{{ vite_asset('resources/scss/main.scss') }}">
</head>

<body>

@yield('content')

<script src="{{ vite_asset('resources/ts/index.ts') }}"></script>
</body>
</html>
