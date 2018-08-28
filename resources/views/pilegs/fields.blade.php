<!-- Dapil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province_id', 'Province Id:') !!}
    {!! Form::text('province_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Name2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name2', 'Name2:') !!}
    {!! Form::text('name2', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::date('dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Pob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pob', 'Pob:') !!}
    {!! Form::text('pob', null, ['class' => 'form-control']) !!}
</div>

<!-- Partai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('partai', 'Partai:') !!}
    {!! Form::text('partai', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pilegs.index') !!}" class="btn btn-default">Cancel</a>
</div>
