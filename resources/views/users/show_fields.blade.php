<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $user->id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $user->name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Password Field -->
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    <p>{!! $user->password !!}</p>
</div>

<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $user->type !!}</p>
</div>

<!-- Nik Field -->
<div class="form-group">
    {!! Form::label('nik', 'Nik:') !!}
    <p>{!! $user->nik !!}</p>
</div>

<!-- Gender Field -->
<div class="form-group">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{!! $user->gender_label !!}</p>
</div>

<!-- Dob Field -->
<div class="form-group">
    {!! Form::label('dob', 'Date of Birth:') !!}
    <p>{!! $user->dob !!}</p>
</div>

<!-- Pob Field -->
<div class="form-group">
    {!! Form::label('pob', 'Place of Birth:') !!}
    <p>{!! $user->pob !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $user->status_label !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $user->phone !!}</p>
</div>

<!-- Occupation Field -->
<div class="form-group">
    {!! Form::label('occupation', 'Occupation:') !!}
    <p>{!! $user->occupation_label !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{!! $user->address !!}</p>
</div>

@if(isset($user->province->name))
    <div class="form-group">
        {!! Form::label('province', 'Provinsi:') !!}
        <p>{!! $user->province->name !!}</p>
    </div>
@endif

@if(isset($user->regency->name))
    <div class="form-group">
        {!! Form::label('regency', 'Kota/Kabupaten:') !!}
        <p>{!! $user->regency->name !!}</p>
    </div>
@endif

@if(isset($user->district->name))
    <div class="form-group">
        {!! Form::label('district', 'Kelurahan:') !!}
        <p>{!! $user->district->name !!}</p>
    </div>
@endif

@if(isset($user->village->name))
    <div class="form-group">
        {!! Form::label('village', 'Kecamatan:') !!}
        <p>{!! $user->village->name !!}</p>
    </div>
@endif

<!-- Tps Id Field -->
<div class="form-group">
    {!! Form::label('tps_id', 'ID/TPS/DAPIL :') !!}
    @if(isset($user->tps_id) && !empty($user->tps_id))
        <p data-id="{!! $user->tps_id !!}">{!! implode(' - ', [$user->tps_id, $user->tps->name, $user->tps->dapil->nama]) !!}</p>
    @endif
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{!! $user->is_active !!}</p>
</div>

<!-- Is Admin Field -->
@if($user->is_admin)
    <div class="form-group">
        {!! Form::label('is_admin', 'Is Admin:') !!}
        <p>{!! $user->is_admin !!}</p>
    </div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $user->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $user->updated_at !!}</p>
</div>

