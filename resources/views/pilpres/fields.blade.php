<!-- Capres Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capres_name', 'Capres Name:') !!}
    {!! Form::text('capres_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Capres Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capres_dob', 'Capres Dob:') !!}
    {!! Form::date('capres_dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Capres Pob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capres_pob', 'Capres Pob:') !!}
    {!! Form::text('capres_pob', null, ['class' => 'form-control']) !!}
</div>

<!-- Capres Partai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capres_partai', 'Capres Partai:') !!}
    {!! Form::text('capres_partai', null, ['class' => 'form-control']) !!}
</div>

<!-- Cawapres Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cawapres_name', 'Cawapres Name:') !!}
    {!! Form::text('cawapres_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Cawapres Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cawapres_dob', 'Cawapres Dob:') !!}
    {!! Form::date('cawapres_dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Cawapres Pob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cawapres_pob', 'Cawapres Pob:') !!}
    {!! Form::text('cawapres_pob', null, ['class' => 'form-control']) !!}
</div>

<!-- Cawapres Partai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cawapres_partai', 'Cawapres Partai:') !!}
    {!! Form::text('cawapres_partai', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pilpres.index') !!}" class="btn btn-default">Cancel</a>
</div>
