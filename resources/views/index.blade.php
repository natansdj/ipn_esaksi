@extends('layouts.app')

@section('content')
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

    <div class="search-bar">
        <h3>Hasil polling <span>Real Count</span></h3>
        <form class="form-inline">
            <input type="search" name="" placeholder="Cari Provinsi" class="form-control">
        </form>
    </div>

    <div class="region-wrap">
        <div class="row">
            <div class="col-md-4">
                <div class="region-box">
                    <div class="region-head">
                        <h5 class="nregion">Jawa Barat</h5>
                        <h5 class="cregion">Jml. Voter</h5>
                        <h5 class="dregion">27 Juni 2018</h5>
                        <h5 class="vregion">960K</h5>
                    </div>
                    <div class="region-body">
                        <div class="table-overflow-y">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>cagub & cawagub</th>
                                    <th class="text-right">presentase</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active">
                                    <td><span class="box"></span> Ridwan Kamil - UU <i class="fa fa-check"></i></td>
                                    <td class="text-right">40%</td>
                                </tr>
                                <tr>
                                    <td><span class="box"></span> Tubagus Hasanuddin - Irjen</td>
                                    <td class="text-right">10%</td>
                                </tr>
                                <tr>
                                    <td><span class="box"></span> Sudrajat - Ahmad Syaikhu</td>
                                    <td class="text-right">25%</td>
                                </tr>
                                <tr>
                                    <td><span class="box"></span> Deddy Mizwar - Dedi</td>
                                    <td class="text-right">25%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="region-date">Updated, 17 Mei 2018 - 12:05 WIB</span>
                        <button class="btn">Berikan Polling Anda</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="region-box yellow">
                    <div class="region-head">
                        <h5 class="nregion">Jawa Timur</h5>
                        <h5 class="cregion">Jml. Voter</h5>
                        <h5 class="dregion">15 Juli 2018</h5>
                        <h5 class="vregion">820K</h5>
                    </div>
                    <div class="region-body">
                        <div class="table-overflow-y">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>cagub & cawagub</th>
                                    <th class="text-right">presentase</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active">
                                    <td><span class="box"></span> Khofifah Indar - Emil Elestianto
                                        <i class="fa fa-check"></i></td>
                                    <td class="text-right">70%</td>
                                </tr>
                                <tr>
                                    <td><span class="box"></span> Saifullah Yusuf - Puti Guntur</td>
                                    <td class="text-right">30%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="region-date">Updated, 17 Mei 2018 - 12:05 WIB</span>
                        <button class="btn">Berikan Polling Anda</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="region-box disabled">
                    <div class="region-head">
                        <h5 class="nregion">Jawa Tengah</h5>
                        <h5 class="cregion">Jml. Voter</h5>
                        <h5 class="dregion">1 Juli 2018</h5>
                        <h5 class="vregion">720K</h5>
                    </div>
                    <div class="region-body">
                        <div class="table-overflow-y">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>cagub & cawagub</th>
                                    <th class="text-right">presentase</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="active">
                                    <td><span class="box"></span> Ganjar Pranowo - Taj Yasin <i class="fa fa-check"></i>
                                    </td>
                                    <td class="text-right">70%</td>
                                </tr>
                                <tr>
                                    <td><span class="box"></span> Sudirman Said - Ida Fauziyah</td>
                                    <td class="text-right">30%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <span class="region-date">Updated, 17 Mei 2018 - 12:05 WIB</span>
                        <button class="btn">Berikan Polling Anda</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      jQuery('#vmap').vectorMap({
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
          // var message = 'You clicked "'
          //     + region
          //     + '" which has the code: '
          //     + code.toUpperCase();
          $('.region-name').text(region);
        }
      });

      $('.toggle-sidebar').on('click', function () {
        $('.sidebar').toggleClass('small');
        $('.content').toggleClass('big');
        $('.content-head').toggleClass('big');
        var $map = $('#vmap');
        $map.width("100%");
      })
    </script>
@endsection