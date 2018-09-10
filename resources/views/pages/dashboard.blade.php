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
            @component('components.dapil_box')
            @endcomponent
        </div>
        <div class="col-md-4">
            @component('components.dapil_box', ['class' => 'yellow'])
            @endcomponent
        </div>
        <div class="col-md-4">
            @component('components.dapil_box', ['class' => 'disabled'])
            @endcomponent
        </div>
    </div>
</div>