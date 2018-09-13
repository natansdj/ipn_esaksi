<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pileg->id !!}</p>
</div>

<!-- Province Id Field -->
<div class="form-group">
    {!! Form::label('province_id', 'Province Id:') !!}
    <p>{!! $pileg->province_id !!}</p>
</div>

<!-- Silon Id Field -->
<div class="form-group">
    {!! Form::label('silon_id', 'Silon Id:') !!}
    <p>{!! $pileg->silon_id !!}</p>
</div>

<!-- Dapil Id Field -->
<div class="form-group">
    {!! Form::label('dapil_id', 'Dapil Id:') !!}
    <p>{!! $pileg->dapil_nama !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $pileg->name !!}</p>
</div>

<!-- Gelar Depan Field -->
<div class="form-group">
    {!! Form::label('gelar_depan', 'Gelar Depan:') !!}
    <p>{!! $pileg->gelar_depan !!}</p>
</div>

<!-- Gelar Belakang Field -->
<div class="form-group">
    {!! Form::label('gelar_belakang', 'Gelar Belakang:') !!}
    <p>{!! $pileg->gelar_belakang !!}</p>
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
    <p>{!! $pileg->jenis_kelamin !!}</p>
</div>

<!-- No Urut Field -->
<div class="form-group">
    {!! Form::label('no_urut', 'No Urut:') !!}
    <p>{!! $pileg->no_urut !!}</p>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Tanggal Lahir :') !!}
    <p>{!! $pileg->dob !!}</p>
</div>

<!-- Pob Field -->
<div class="form-group">
    {!! Form::label('pob', 'Tempat Lahir :') !!}
    <p>{!! $pileg->pob !!}</p>
</div>

<!-- Partai Field -->
<div class="form-group">
    {!! Form::label('partai', 'Partai:') !!}
    <p>{!! $pileg->partai !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $pileg->type !!}</p>
</div>

<!-- Note Field -->
<div class="form-group">
    {!! Form::label('note', 'Note:') !!}
    <p>{!! $pileg->note !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pileg->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pileg->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
@if(isset($pileg->deleted_at))
    <div class="form-group">
        {!! Form::label('deleted_at', 'Deleted At:') !!}
        <p>{!! $pileg->deleted_at !!}</p>
    </div>
@endif