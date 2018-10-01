<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'eSaksi') }}</title>

{{--<link rel="shortcut icon" href="{{ asset('images/favico.png') }}" type="image/x-icon" />--}}

<!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <!-- Load Style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" media="screen">

    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen">

    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>


<body>

@include('layouts.sidebar', ['attr_sidebar_type' => 'small'])

<div class="content big">
    <div class="content-head big">
        <a href="javascript:void(0);" class="toggle-sidebar"> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
        <div class="dd-wrap">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="peep" style="background-image: url('{{ asset('images/p1.jpg') }}');"></span>
                    {!! Auth::user()->name !!}
                    <i class="fa fa-angle-down"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" hidden href="#">Profile</a>
                    <a class="dropdown-item" href="{!! url('/logout') !!}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                </div>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>

    {{-- CONTENT --}}
    @foreach($return as $key => $item)
        <strong>{{ $key }} =></strong>
        {!! d($item->toArray()) !!}
    @endforeach
</div>

<!-- Load Scripts -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript">
  $('.toggle-sidebar').on('click', function (e) {
    e.preventDefault();
    $('.sidebar').toggleClass('small');
    $('.content').toggleClass('big');
    $('.content-head').toggleClass('big');
  });
</script>
</body>
</html>