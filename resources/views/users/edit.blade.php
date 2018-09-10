@extends('layouts.app')

@section('content')
    <div class="row page-title">
        <div class="col-md-12 nopadding">
            <h3 class="pull-left">User</h3>
            <h3 class="pull-right">
                <a href="{!! route('users.index') !!}" class="btn btn-default">Back</a>
            </h3>
        </div>
    </div>

    <div class="content-wrap">

        @include('adminlte-templates::common.errors')

        {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

        <div class="row">
            @include('users.fields')
        </div>

        {!! Form::close() !!}
    </div>
    <div class="clearfix"></div>
@endsection