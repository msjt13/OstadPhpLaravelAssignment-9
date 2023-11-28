<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('sitetitle')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css') }}/core.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css') }}/styles.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css') }}/custom.css" />
        <!-- inject:css-->
        <!-- endinject -->
        <link rel="icon" type="image/png" href="favicon.png?version=1" />
        <script src="{{ asset('assets/js') }}/assets/jquery.js"></script>
    </head>
    <body class="smooth-transition">
        <div class="container-fluid">