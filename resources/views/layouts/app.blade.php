<!DOCTYPE html>
<html>

@include('layouts.header')

<body>

@include('layouts.sidebar')

<div class="content">
    <div class="content-head">
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

    @yield('content')
</div>

@include('layouts.footer')

@yield('scripts')
</body>
</html>