<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Tingkat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tingkat', 'Tingkat:') !!}
    {!! Form::text('tingkat', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlahpenduduk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlahPenduduk', 'Jumlahpenduduk:') !!}
    {!! Form::text('jumlahPenduduk', null, ['class' => 'form-control']) !!}
</div>

<!-- Idwilayah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idWilayah', 'Idwilayah:') !!}
    {!! Form::text('idWilayah', null, ['class' => 'form-control']) !!}
</div>

<!-- Totalalokasikursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('totalAlokasiKursi', 'Totalalokasikursi:') !!}
    {!! Form::text('totalAlokasiKursi', null, ['class' => 'form-control']) !!}
</div>

<!-- Idversi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idVersi', 'Idversi:') !!}
    {!! Form::text('idVersi', null, ['class' => 'form-control']) !!}
</div>

<!-- Nodapil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('noDapil', 'Nodapil:') !!}
    {!! Form::text('noDapil', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dapils.index') !!}" class="btn btn-default">Cancel</a>
</div>
