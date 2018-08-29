@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Saksi</h3>
    </div>

    <div class="content-wrap">
        <form>
            <div class="row">
                <div class="col-md-12">
                    <h5 class="section-title">Biodata</h5>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Name Lengkap</label>
                        <input type="text" class="form-control" placeholder="Gugi Gunawan" name="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Alamat Email</label>
                        <input type="email" class="form-control" placeholder="gugi.g@yahoo.com" name="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Jenis Kelamin</label> <select class="form-control">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Tanggal Lahir</label>
                        <input class="datetimepicker" placeholder="30 Agustus 1984" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Tempat Lahir</label> <select class="form-control">
                            <option>Bandung</option>
                            <option>Jakarta</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Pekerjaan</label> <select class="form-control">
                            <option>PNS</option>
                            <option>Karyawan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Status</label> <select class="form-control">
                            <option>Sudah Kawin</option>
                            <option>Belum Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Wilayah Anggota</label>
                        <input type="text" class="form-control" placeholder="" name="">
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="section-title mt-4">Tempat Tinggal</h5>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Alamat Lengkap</label>
                        <textarea class="form-control" placeholder="Jalan RE Martadinata No. 35 Bandung"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Provinsi</label> <select class="form-control">
                            <option>Jawa Barat</option>
                            <option>Jawa Timur</option>
                            <option>Jawa Tengah</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kota/Kabupaten</label> <select class="form-control">
                            <option>Bandung</option>
                            <option>Cimahi</option>
                            <option>Garut</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kecamatan</label> <select class="form-control">
                            <option>Sukajadi</option>
                            <option>Sukasari</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Kelurahan</label> <select class="form-control">
                            <option>Cipedes</option>
                            <option>Antapani</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    <button class="btn btn-primary mr-3 w200">Submit</button>
                    <button class="btn btn-default w200">Cancel</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
      $('.toggle-sidebar').on('click', function () {
        $('.sidebar').toggleClass('small');
        $('.content').toggleClass('big');
        $('.content-head').toggleClass('big');
        var $map = $('#vmap');
        $map.width("100%");
      });

      $(document).ready(function () {
        $('.datetimepicker').datepicker({
          uiLibrary: 'bootstrap4',
          format: 'dd mmmm yyyy'
        });
      })
    </script>
@endsection