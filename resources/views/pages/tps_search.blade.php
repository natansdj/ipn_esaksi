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

    <div class="vmap-wrap">
        <div id="vmap"></div>
        <div class="overlay-map">
            <div class="overlay-head">
                <span class="region-name">Jawa Barat</span> <span class="capt">Jml Voter</span>
                <span class="date">27 Juni 2018</span> <span class="voter">980K</span>
            </div>
            <div class="overlay-body">
                <ol>
                    <li class="active">
                        <span class="pull-left">Ridwan - UU</span> <i class="fa fa-check pull-left"></i>
                        <span class="nvoter pull-right">40%</span>
                    </li>
                    <li>
                        <span class="pull-left">Tubagus - Anton</span> <span class="nvoter pull-right">10%</span>
                    </li>
                    <li>
                        <span class="pull-left">Sudrajat - Ahmad</span> <span class="nvoter pull-right">25%</span>
                    </li>
                    <li>
                        <span class="pull-left">Deddy - Dedi</span> <span class="nvoter pull-right">25%</span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
      $('#vmap').vectorMap({
        map: 'indonesia_id',
        backgroundColor: '#fff',
        borderColor: '#fff',
        borderOpacity: 0.25,
        borderWidth: 1,
        color: '#8a8a8a',
        enableZoom: false,
        hoverColor: '#00a4ee',
        hoverOpacity: null,
        normalizeFunction: 'linear',
        scaleColors: ['#b6d6ff', '#005ace'],
        selectedColor: '#00a4ee',
        selectedRegions: null,
        showTooltip: true,
        onRegionClick: function (element, code, region) {
          $('.region-name').text(region);
        }
      });
    </script>
@endsection