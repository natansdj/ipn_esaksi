@extends('layouts.app')

@section('content')
    <div class="row page-title">
        <div class="col-md-12">
            <div class="clearfix"></div>
            <h3 class="pull-left">Wilayah</h3>
            <h3 class="pull-right">
                <a href="{!! route('wilayahs.index') !!}" class="btn btn-default">Back</a>
            </h3>
        </div>
    </div>

    <div class="content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="clearfix"></div>

                @include('adminlte-templates::common.errors')

                <div class="clearfix"></div>
                   {!! Form::model($wilayah, ['route' => ['wilayahs.update', $wilayah->id], 'method' => 'patch']) !!}

                        @include('wilayahs.fields')

                   {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection