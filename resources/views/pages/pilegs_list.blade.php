@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Pileg</h3>
        <p>Pemilihan Legislatif</p>
    </div>

    <div class="filter-wrap">
        {!! Form::open(['method' => 'GET','route' => 'pilegs.list', 'class'=>'form searchform']) !!}
        <div class="row d-flex align-items-center">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('name', 'Cari nama Calon/Wakil Calon', ['class' => 'control-label']) !!}
                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Cari nama calon/wakil calon', 'autofocus']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('type', 'Bakal Calon', ['class' => 'control-label']) !!}
                    {!! Form::select('type', $dropdown_type, null, ['class'=>'form-control', 'placeholder'=>'Silahkan Pilih']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('partai', 'Partai', ['class' => 'control-label']) !!}
                    {!! Form::select('partai', $dropdown_partai, null, ['class'=>'form-control', 'placeholder'=>'Pilih Partai']) !!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="btn-group-vertical">
                    {!! Form::submit('Search', ['class'=>'btn btn-default']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    <div class="content-wrap">
        <div class="row">
            @foreach($collection as $item)
                <div class="col-md-6">
                    @component('pilegs.single_box', ['item' => $item])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
@endsection
