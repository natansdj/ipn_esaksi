<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'eSaksi') }}</title>

{{--<link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon" />--}}

<!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Load Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/jqvmap.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/gijgo.min.css') }}" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('css')
</head>
