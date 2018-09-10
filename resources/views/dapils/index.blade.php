@extends('layouts.app')

@section('content')
    <div class="row page-title">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h3 class="pull-left">Dapils</h3>
            <h3 class="pull-right">
                <a class="btn btn-primary pull-right" href="{!! route('dapils.create') !!}">Add New</a>
            </h3>
        </div>
    </div>

    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>

                @include('flash::message')

                <div class="clearfix"></div>
                @include('dapils.table')

                <div class="text-center">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

