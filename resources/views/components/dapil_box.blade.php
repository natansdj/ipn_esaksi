@php
    $attr_class = '';
    if(isset($class) && !empty($class)){
        $attr_class = $class; 
    }
@endphp
<div class="region-box {{ $attr_class }}">
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
                    <th class="text-right">persentase</th>
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
        <span class="region-date">Update, 17 Mei 2018 - 12:05 WIB</span>
        <button class="btn" hidden>Berikan Polling Anda</button>
    </div>
</div>