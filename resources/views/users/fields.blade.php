<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gender', 'Gender:') !!}
    {!! Form::text('gender', null, ['class' => 'form-control']) !!}
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

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['1' => 'Kawin', '2' => 'Belum Kawin'], null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('occupation', 'Occupation:') !!}
    {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Tps Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tps_id', 'Tps Id:') !!}
    {!! Form::text('tps_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', false) !!}
        {!! Form::checkbox('is_active', '1', null) !!} 1
    </label>
</div>

<!-- Is Admin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_admin', 'Is Admin:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_admin', false) !!}
        {!! Form::checkbox('is_admin', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
