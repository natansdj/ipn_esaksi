<div class="calon-box af">
    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
    <div class="calon-info af">
        <h5 class="name">{{ (isset($item->name))? $item->name : '' }}</h5>
        <h5 class="title">Bakal Calon</h5>
        <h5 class="lahir">
            {{ (isset($item->pob))? $item->pob: '' }},
            {{ (isset($item->dob))? $item->dob->format('d M Y') : '' }}
        </h5>
        <h5 class="bakal">{{ (isset($item->type))? $item->type : '' }}</h5>
        <h5 class="chance">85% Peluang</h5>

        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>