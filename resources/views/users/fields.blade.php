<div class="col-md-12">
    <h5 class="section-title">Biodata</h5>
</div>

<!-- Name Field -->
<div class="form-group col-md-6">
    {!! Form::label('name', 'Nama Lengkap', ['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nama Lengkap' ]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-md-6">
    {!! Form::label('email', 'Alamat Email', ['class' => 'control-label']) !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>'Alamat Email']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-md-6">
    {!! Form::label('gender', 'Jenis Kelamin', ['class' => 'control-label']) !!}
    {!! Form::select('gender', U_GENDER ,null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-md-6">
    {!! Form::label('dob', 'Tanggal Lahir') !!}
    {!! Form::text('dob', null, ['class' => 'form-control datetimepicker']) !!}
</div>

<!-- Pob Field -->
<div class="form-group col-md-6">
    {!! Form::label('pob', 'Tempat Lahir') !!}
    {!! Form::text('pob', null, ['class' => 'form-control']) !!}
</div>

<!-- Occupation Field -->
<div class="form-group col-md-6">
    {!! Form::label('occupation', 'Pekerjaan') !!}
    {!! Form::select('occupation', U_OCCUPATION, null, ['class' => 'form-control', 'placeholder' => 'Pilih Pekerjaan']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-md-6">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', U_STATUS, null, ['class' => 'form-control', 'placeholder' => 'Pilih Status']) !!}
</div>

<!-- Tps Id Field -->
<div class="form-group col-md-6">
    {!! Form::label('tps_id', 'Wilayah Anggota') !!}
    {!! Form::text('tps_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nik Field -->
<div class="form-group col-md-6">
    {!! Form::label('nik', 'No. Identitas') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-md-6">
    {!! Form::label('phone', 'Nomor Telepon') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="col-md-12">
    <h5 class="section-title mt-4">Tempat Tinggal</h5>
</div>

<!-- Address Field -->
<div class="form-group col-md-12">
    {!! Form::label('address', 'Alamat Lengkap') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Provinces Field -->
<div class="form-group col-md-6">
    {!! Form::label('province_id', 'Provinsi') !!}
    {!! Form::select('province_id', $provinces, null, ['class' => 'form-control select-ajax', 'placeholder' => 'Pilih Provinsi', 'type' => 'regencies']) !!}
</div>

<!-- Regencies Field -->
<div class="form-group col-md-6">
    {!! Form::label('regency_id', 'Kota/Kabupaten') !!}
    {!! Form::select('regency_id', (isset($regencies))? $regencies : [], null, ['class' => 'form-control select-ajax', 'placeholder' => 'Pilih Kota/Kabupaten', 'type' => 'districts']) !!}
</div>

<!-- District Field -->
<div class="form-group col-md-6">
    {!! Form::label('district_id', 'Kecamatan') !!}
    {!! Form::select('district_id', (isset($districts))? $districts : [], null, ['class' => 'form-control select-ajax', 'placeholder' => 'Pilih Kecamatan', 'type' => 'villages']) !!}
</div>

<!-- Villages Field -->
<div class="form-group col-md-6">
    {!! Form::label('village_id', 'Kelurahan') !!}
    {!! Form::select('village_id', (isset($villages))? $villages : [], null, ['class' => 'form-control select-ajax', 'placeholder' => 'Pilih Kelurahan']) !!}
</div>

<div class="col-md-12">
    <h5 class="section-title mt-4"></h5>
</div>

@if(!isset($page_saksi))
    <div class="col-md-12">
        <div class="row">
            <!-- Password Field -->
            <div class="form-group col-md-6">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password',['class'=>'form-control']) !!}
            </div>

            <!-- Konfirmasi Password Field -->
            <div class="form-group col-md-6">
                {!! Form::label('password_confirmation', 'Konfirmasi Password') !!}
                {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
@endif

<!-- Is Active Field -->
@if(!isset($page_saksi))
    <div class="col-md-6">
        <div class="row">
            <div class="form-group col-md-6">
                <label class="checkbox-inline">
                    {!! Form::hidden('is_active', 1) !!}
                    {!! Form::checkbox('is_active', '1', null, ['class' => 'icheck']) !!} Is Active</label>
            </div>

            <!-- Is Admin Field -->
            <div class="form-group col-md-6">
                <label class="checkbox-inline">
                    {!! Form::hidden('is_admin', 0) !!}
                    {!! Form::checkbox('is_admin', '1', null, ['class' => 'icheck']) !!} Is Admin </label>
            </div>
        </div>
    </div>
@endif

<!-- Submit Field -->
<div class="col-md-12 mb-5">
    <div class="form-group">
        {!! Form::submit('Submit', ['class' => 'btn btn-primary mr-3 w200']) !!}
        @php
            $url_cancel = (isset($page_saksi) && $page_saksi)? route('dashboard') : route('users.index');
        @endphp
        <a href="{!! $url_cancel !!}" class="btn btn-default w200">Cancel</a>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
      $(function () {
        $('.select-ajax').on('change', function (e) {
          e.preventDefault();
          var elem = $(this),
            type = elem.attr('type'),
            parent_id = elem.val(),
            next_elem = elem.parent('.form-group').next('.form-group').find('select.select-ajax');

          next_elem.children('option:not(:first)').remove();
          next_elem.val('').trigger('change');

          if (typeof type !== 'undefined' && type !== '' && parent_id !== '') {
            $.get('/ajax_data/get_' + type, {id: parent_id}, function (data) {
              if (!data.error) {
                $.each(data.data, function (idx, value) {
                  next_elem.append('<option value="' + idx + '">' + value + '</option>');
                });
              }
            });
          }

        });
      });
    </script>
@endsection