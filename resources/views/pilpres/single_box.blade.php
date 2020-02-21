<div class="calon-box af">
    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
    <span class="pileg-img c2" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
    <div class="calon-info c2 af">
        <h5 class="name">{{ ($item->capres_name) ?? '-' }}</h5>
        <h5 class="name c2">{{ ($item->cawapres_name) ?? '-' }}</h5>
        <h5 class="chance c2">Elektabilitas {{ rand(10, 90) }}%</h5>

        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>