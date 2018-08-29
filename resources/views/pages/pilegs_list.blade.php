@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h3>Pileg</h3>
        <p>Pemilihan Legislatif</p>
    </div>

    <div class="filter-wrap">
        <form>
            <div class="row d-flex align-items-center">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label"> Cari nama Calon/Wakil Calon </label>
                        <input type="text" name="" value="Ega" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="control-label"> Bakal Calon </label> <select class="form-control">
                            <option>DPRD</option>
                            <option>DPD</option>
                            <option>MPR</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="control-label"> Partai </label> <select class="form-control">
                            <option>PAN</option>
                            <option>PDI</option>
                            <option>PPP</option>
                        </select>
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
                    <div class="calon-info af">
                        <h5 class="name">Dr. Ega Kamaludin</h5>
                        <h5 class="title">Bakal Calon</h5>
                        <h5 class="lahir">Bandung, 17 Juli 1988</h5>
                        <h5 class="bakal">DPR</h5>
                        <h5 class="chance">85% Peluang</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info af">
                        <h5 class="name">Dr. Rexy Mainaqi</h5>
                        <h5 class="title">Bakal Calon</h5>
                        <h5 class="lahir">Bandung, 10 Agustus 1988</h5>
                        <h5 class="bakal">DPRD</h5>
                        <h5 class="chance">10% Peluang</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info af">
                        <h5 class="name">Dr. Bouma Asep</h5>
                        <h5 class="title">Bakal Calon</h5>
                        <h5 class="lahir">Bandung, 15 November 1958</h5>
                        <h5 class="bakal">DPRD Kota</h5>
                        <h5 class="chance">60% Peluang</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="calon-box af">
                    <span class="pileg-img" style="background-image: url('{{ asset('images/peep.jpg') }}');"></span>
                    <div class="calon-info af">
                        <h5 class="name">Dr. Iwan Sanjaya</h5>
                        <h5 class="title">Bakal Calon</h5>
                        <h5 class="lahir">Bandung, 1 Desember 1988</h5>
                        <h5 class="bakal">DPRD</h5>
                        <h5 class="chance">90% Peluang</h5>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
