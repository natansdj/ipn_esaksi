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

<!-- Jumlah Penduduk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_penduduk', 'Jumlah Penduduk:') !!}
    {!! Form::text('jumlah_penduduk', null, ['class' => 'form-control']) !!}
</div>

<!-- Wilayah Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_wilayah', 'Wilayah Id:') !!}
    {!! Form::text('id_wilayah', null, ['class' => 'form-control']) !!}
</div>

<!-- Alokasi Kursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_kursi', 'Alokasi Kursi:') !!}
    {!! Form::text('alokasi_kursi', null, ['class' => 'form-control']) !!}
</div>

<!-- Alokasi Sisa Kursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_sisa_kursi', 'Alokasi Sisa Kursi:') !!}
    {!! Form::text('alokasi_sisa_kursi', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Alokasi Kursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_alokasi_kursi', 'Total Alokasi Kursi:') !!}
    {!! Form::text('total_alokasi_kursi', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Versi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_versi', 'Id Versi:') !!}
    {!! Form::text('id_versi', null, ['class' => 'form-control']) !!}
</div>

<!-- No Dapil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_dapil', 'No Dapil:') !!}
    {!! Form::text('no_dapil', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('dapils.index') !!}" class="btn btn-default">Cancel</a>
</div>
