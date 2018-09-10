<!-- Province Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province_id', 'Province Id:') !!}
    {!! Form::text('province_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Kodepos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kodepos_id', 'Kodepos Id:') !!}
    {!! Form::text('kodepos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dapil Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dapil_id', 'Dapil Id:') !!}
    {!! Form::text('dapil_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Geo Location Field -->
<div class="form-group col-sm-6">
    {!! Form::label('geo_location', 'Geo Location:') !!}
    {!! Form::text('geo_location', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tps.index') !!}" class="btn btn-default">Cancel</a>
</div>
