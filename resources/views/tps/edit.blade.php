@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tps </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::model($tps, ['route' => ['tps.update', $tps->id], 'method' => 'patch']) !!}

                    @include('tps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection