<div class="vmap-wrap-hover">
    <div class="overlay-map">
        <div class="overlay-head">
            <span class="region-name">{{ $model->name }}</span>
            {{--<span class="capt">Tingkat: {{ $master->tingkat }}</span> <span class="date">Total Alokasi Kursi</span>--}}
            {{--<span class="voter">{{ (isset($model->total_alokasi_kursi)) ? $model->total_alokasi_kursi : '-' }}</span>--}}
            <span class="capt"></span> <span class="date">Tingkat Dapil</span>
            <span class="voter">{{ $master->tingkat }}</span>
        </div>
        <div class="overlay-body">
            <div class="row">
                <div class="col-md-12">
                    <span class="pull-left">Dapil/Wilayah</span> <span class="pull-right">Alokasi Kursi</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ol>
                        @foreach($model->dapil as $dapil)
                            <li>
                                <span class="pull-left">{{ $dapil->nama }}</span>
                                <span class="nvoter pull-right">{{ $dapil->total_alokasi_kursi }}</span>
                                {{--@if(isset($dapil->attr_wilayah) && !empty($dapil->attr_wilayah))--}}
                                    {{--<span class="pull-left"><i>{{ str_limit($dapil->attr_wilayah, 80) }}</i></span>--}}
                                {{--@endif--}}
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>