@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Pilpres</h3>
        <p>Pemilihan Presiden</p>
    </div>

    <div class="filter-wrap">
        <form>
            <div class="row d-flex align-items-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label">
                            Cari nama Calon/Wakil Calon
                        </label>
                        <input type="text" name="" value="Ega" class="form-control">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="content-wrap">
        <div class="row">
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <span class="pileg-img c2" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info c2 af">
                        <h5 class="name">Dr. Ega Kamaludin</h5>
                        <h5 class="name c2">Prof. Asep Danis</h5>
                        <h5 class="chance c2">Elektabilitas 85%</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <span class="pileg-img c2" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info c2 af">
                        <h5 class="name">Dr. Rexy Mainaqi</h5>
                        <h5 class="name c2">Budi Surya</h5>
                        <h5 class="chance c2">Elektabilitas 85%</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <span class="pileg-img c2" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info c2 af">
                        <h5 class="name">Ahmad Hasan</h5>
                        <h5 class="name c2">Syarief Rahmatulloh, Ssi</h5>
                        <h5 class="chance c2">Elektabilitas 55%</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <span class="pileg-img c2" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info c2 af">
                        <h5 class="name">Rahmat Albar</h5>
                        <h5 class="name c2">Dr. Iwan Sanjaya</h5>
                        <h5 class="chance c2">Elektabilitas 35%</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
