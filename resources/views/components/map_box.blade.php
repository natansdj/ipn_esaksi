<div class="overlay-map" data-code="{{ $path }}">
    <div class="overlay-head">
        <span class="region-name">{{ $model->name }}</span>
        <span class="capt"><a class="overlay-close" href="javascript:void(0);"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></span>
        <span class="date">Total Alokasi Kursi</span> <span class="voter">{{ $model->total_alokasi_kursi }}</span>
    </div>
    <div class="overlay-body overlay-overflow">
        <div class="row">
            <div class="col-md-12">
                <span class="pull-left">Wilayah Dapil</span> <span class="pull-right"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ol>
                    @foreach($model->dapil as $dapil)
                        <li>
                            <span class="pull-left">{{ $dapil->nama }}</span> <span class="nvoter pull-right"></span>
                            @if(isset($dapil->attr_wilayah) && !empty($dapil->attr_wilayah))
                                <span class="clearfix"></span>
                                <ol class="pull-left overlay-wilayah">
                                    @foreach($dapil->attr_wilayah as $wilayah)
                                        <li><i>{{ title_case($wilayah) }}</i></li>
                                    @endforeach
                                </ol>
                            @endif
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>