@extends('layouts.app')

@section('content')
    <div style="margin-top: 10px;">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h1 class="pull-left">Tps</h1>
            <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-bottom: 5px" href="{!! route('tps.create') !!}">Add New</a>
            </h1>
        </div>
    </div>

    <div>
        <div class="col-md-12">
            <div class="clearfix"></div>

            @include('flash::message')

            <div class="clearfix"></div>
            @include('tps.table')
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

