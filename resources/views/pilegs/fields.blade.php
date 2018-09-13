<!-- Province Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province_id', 'Province Id:') !!}
    {!! Form::text('province_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Silon Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('silon_id', 'Silon Id:') !!}
    {!! Form::text('silon_id', null, ['class' => 'form-control']) !!}
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

<!-- Gelar Depan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gelar_depan', 'Gelar Depan:') !!}
    {!! Form::text('gelar_depan', null, ['class' => 'form-control']) !!}
</div>

<!-- Gelar Belakang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gelar_belakang', 'Gelar Belakang:') !!}
    {!! Form::text('gelar_belakang', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    {!! Form::select('jenis_kelamin', U_GENDER ,null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
</div>

<!-- No Urut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_urut', 'No Urut:') !!}
    {!! Form::text('no_urut', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Tanggal Lahir:') !!}
    {!! Form::date('dob', null, ['class' => 'form-control']) !!}
</div>

<!-- Pob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pob', 'Tempat Lahir:') !!}
    {!! Form::text('pob', null, ['class' => 'form-control']) !!}
</div>

<!-- Partai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('partai', 'Partai:') !!}
    {!! Form::select('partai', PARTAI ,null, ['class' => 'form-control', 'placeholder' => 'Pilih Partai']) !!}
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    {!! Form::label('note', 'Note:') !!}
    {!! Form::text('note', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pilegs.index') !!}" class="btn btn-default">Cancel</a>
</div>
