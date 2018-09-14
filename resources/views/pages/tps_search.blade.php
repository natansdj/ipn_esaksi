@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>TPS</h3>
        <p>Tempat pemungutan suara</p>
    </div>

    <div class="filter-wrap">
        <form>
            <div class="row d-flex align-items-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label"> Masukan Kode wilayah / Kodepos </label>
                        <input type="number" name="" value="44151" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label"> Kecamatan </label>
                        <p>Tarogong Kidul</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label"> Kota/Kabupaten </label>
                        <p>Garut Kota</p>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label class="control-label"> ID TPS </label>
                        <p>44151</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label"> Penduduk </label>
                        <p>260.000</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label"> Suara Masuk </label>
                        <p>260.000</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @include('components.vmap_wrap')
@endsection
