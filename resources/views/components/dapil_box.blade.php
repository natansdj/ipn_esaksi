@php
    $attr_class = '';
    if(isset($class) && !empty($class)){
        $attr_class = $class; 
    }
@endphp
<div class="region-box {{ $attr_class }}">
    <div class="region-head">
        <h5 class="nregion">{{ (isset($data->nama))? $data->nama : '-' }}</h5>
        <h5 class="cregion">Jml. Voter</h5>
        <h5 class="dregion">{{ (isset($data->total_alokasi_kursi))? 'Total Alokasi Kursi : ' . $data->total_alokasi_kursi : '' }}</h5>
        <h5 class="vregion">{{ (isset($data->jml_voter))? $data->jml_voter : '-' }}</h5>
    </div>
    <div class="region-body">
        <div class="table-overflow-y">
            <table class="table">
                <thead>
                <tr>
                    <th>{{ (isset($data->tingkat))? $data->tingkat: '' }}</th>
                    <th class="text-right">persentase</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($data->pileg) && $data->pileg instanceof \Illuminate\Database\Eloquent\Collection 
                && $data->pileg->isNotEmpty())
                    @foreach($data->pileg as $key => $pileg)
                        <tr @if($loop->first) class="active" @endif data-id="{{ $pileg->id }}">
                            <td><span class="box"></span> {{ $pileg->name }}
                                @if ($loop->first)
                                    <i class="fa fa-check"></i>
                                @endif
                            </td>
                            <td class="text-right">{{ rand(1, 99) }}%</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>Data belum tersedia.</td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <span class="region-date">Update, {{ $data->updated_at->format($master->dateFormat) }}</span>
        <button class="btn" hidden>Berikan Polling Anda</button>
    </div>
</div>