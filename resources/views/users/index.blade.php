@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h1 class="pull-left">Users</h1>
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.create') !!}">Add New</a>
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="clearfix"></div>

            @include('flash::message')

            <div class="clearfix"></div>
            @include('users.table')
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

