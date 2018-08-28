@extends('auth.app')

@section('content')
    <div class="login-wrap">
        <div class="login-sect">
            <a href="{{ route('dashboard') }}"><img src="{{ asset('images/pan-logo.jpg') }}" alt="" class="logo"></a>
            <h6 class="title">eSaksi Partai Amanat Nasional</h6>
            <form method="post" action="{{ url('/login') }}" class="login-box">
                <h5>Login Masuk Aplikasi</h5>
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control user" name="email" value="{{ old('email') }}" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control pass" placeholder="Kata Sandi" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="checkbox icheck">
                        <label><input type="checkbox" name="remember">&nbsp;&nbsp;Remember Me </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Masuk</button>
                <p style="visibility: hidden;">Tidak bisa login? <a href="#">Hubungi Tim Support Kami</a></p>
            </form>

            {{--<a href="{{ url('/password/reset') }}">I forgot my password</a><br>--}}
            {{--<a href="{{ url('/register') }}" class="text-center">Register a new membership</a>--}}
            <p class="copyright">Copyright 2018 eSaksi Partai Amanat Nasional.</p>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
@endsection
