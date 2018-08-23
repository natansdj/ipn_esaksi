@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pileg
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pileg, ['route' => ['pilegs.update', $pileg->id], 'method' => 'patch']) !!}

                        @include('pilegs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection