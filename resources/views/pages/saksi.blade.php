@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Saksi</h3>
    </div>

    <div class="content-wrap">
        @include('flash::message')

        @include('adminlte-templates::common.errors')

        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

        <div class="row">
            @include('users.fields')
        </div>

        {{  Form::hidden('prev_url',URL::current()) }}

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
      $(document).ready(function () {

      });
    </script>
@endsection