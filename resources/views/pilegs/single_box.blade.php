@php
    $attr_peluang = rand(10, 90);
    $attr_dapils_name = '';
@endphp
<div class="calon-box af">
    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
    <div class="calon-info af">
        <h5 class="name">{{ (isset($item->name))? $item->name : '' }}</h5>
        <h5 class="title">Bakal Calon</h5>
        <h5 class="lahir">
            {{--{{ (isset($item->pob))? $item->pob: '' }},--}}
            {{--{{ (isset($item->dob))? $item->dob : '' }}--}}
            {{ (isset($item->dapils_name))? $item->dapils_name : '' }}
        </h5>
        <h5 class="bakal">{{ (isset($item->type))? $item->type : '' }}</h5>
        <h5 class="chance">{{ $attr_peluang }}% Peluang</h5>

        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="{{ $attr_peluang }}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>