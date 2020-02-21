@extends('layouts.app')

@section('content')
    <div class="row page-title">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h3 class="pull-left">Dapil</h3>
            <h3 class="pull-right">
                <a href="{!! route('dapils.index') !!}" class="btn btn-default">Back</a>
            </h3>
        </div>
    </div>

    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>
                @include('dapils.show_fields')
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection
