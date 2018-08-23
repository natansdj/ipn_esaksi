<!DOCTYPE html>
<html>
@include('auth.header')

<body class="hold-transition login-page">

@yield('content')

@include('auth.footer')

@yield('scripts')

</body>
</html>