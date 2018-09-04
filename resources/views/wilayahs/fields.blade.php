<!-- Parent Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parent_id', 'Parent Id:') !!}
    {!! Form::text('parent_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Wilayah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_wilayah', 'Nama Wilayah:') !!}
    {!! Form::text('nama_wilayah', null, ['class' => 'form-control']) !!}
</div>

<!-- Tingkat Wilayah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tingkat_wilayah', 'Tingkat Wilayah:') !!}
    {!! Form::text('tingkat_wilayah', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Pro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_pro', 'Id Pro:') !!}
    {!! Form::text('id_pro', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Kab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kab', 'Id Kab:') !!}
    {!! Form::text('id_kab', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Kec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kec', 'Id Kec:') !!}
    {!! Form::text('id_kec', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Kel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_kel', 'Id Kel:') !!}
    {!! Form::text('id_kel', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Pro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pro', 'Nama Pro:') !!}
    {!! Form::text('nama_pro', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kab', 'Nama Kab:') !!}
    {!! Form::text('nama_kab', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kec', 'Nama Kec:') !!}
    {!! Form::text('nama_kec', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Kel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_kel', 'Nama Kel:') !!}
    {!! Form::text('nama_kel', null, ['class' => 'form-control']) !!}
</div>

<!-- Kode Wilayah Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_wilayah', 'Kode Wilayah:') !!}
    {!! Form::text('kode_wilayah', null, ['class' => 'form-control']) !!}
</div>

<!-- Centroid X Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centroid_x', 'Centroid X:') !!}
    {!! Form::text('centroid_x', null, ['class' => 'form-control']) !!}
</div>

<!-- Centroid Y Field -->
<div class="form-group col-sm-6">
    {!! Form::label('centroid_y', 'Centroid Y:') !!}
    {!! Form::text('centroid_y', null, ['class' => 'form-control']) !!}
</div>

<!-- Depth Level Field -->
<div class="form-group col-sm-6">
    {!! Form::label('depth_level', 'Depth Level:') !!}
    {!! Form::text('depth_level', null, ['class' => 'form-control']) !!}
</div>

<!-- Urutan Lampiran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('urutan_lampiran', 'Urutan Lampiran:') !!}
    {!! Form::text('urutan_lampiran', null, ['class' => 'form-control']) !!}
</div>

<!-- Jumlah Penduduk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jumlah_penduduk', 'Jumlah Penduduk:') !!}
    {!! Form::text('jumlah_penduduk', null, ['class' => 'form-control']) !!}
</div>

<!-- Alokasi Kursi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alokasi_kursi', 'Alokasi Kursi:') !!}
    {!! Form::text('alokasi_kursi', null, ['class' => 'form-control']) !!}
</div>

<!-- Bppd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bppd', 'Bppd:') !!}
    {!! Form::text('bppd', null, ['class' => 'form-control']) !!}
</div>

<!-- Jml Versi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jml_versi', 'Jml Versi:') !!}
    {!! Form::text('jml_versi', null, ['class' => 'form-control']) !!}
</div>

<!-- Dapil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dapil', 'Dapil:') !!}
    {!! Form::text('dapil', null, ['class' => 'form-control']) !!}
</div>

<!-- Peta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peta', 'Peta:') !!}
    {!! Form::text('peta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('wilayahs.index') !!}" class="btn btn-default">Cancel</a>
</div>
