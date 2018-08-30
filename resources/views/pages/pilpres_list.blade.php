@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Pilpres</h3>
        <p>Pemilihan Presiden</p>
    </div>

    <div class="filter-wrap">
        {!! Form::open(['method' => 'GET','route' => 'pilpres.list', 'class'=>'form searchform']) !!}
        <div class="row d-flex align-items-center">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('search', 'Cari nama Calon/Wakil Calon', ['class' => 'control-label']) !!}
                    {!! Form::text('search', null, ['class'=>'form-control', 'placeholder'=>'Cari nama calon/wakil calon', 'autofocus']) !!}
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

    <div class="content-wrap">
        <div class="row">
            @foreach($collection as $item)
                <div class="col-md-6">
                    @component('pilpres.single_box', ['item' => $item])
                    @endcomponent
                </div>
            @endforeach
        </div>
    </div>
@endsection
