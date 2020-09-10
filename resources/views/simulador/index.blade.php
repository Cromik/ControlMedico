@extends('layouts.admin')

@section('content')

<body onload="myFunction()">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado de Pacientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Paciente</a></li>
                        <li class="breadcrumb-item active">Lista Pacientes</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>



    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros</h3>
                        </div>
                        <div class="card-body">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" style="" viewBox="0 0 1920 1080" x="0px" y="0px" xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve" version="1.1">
                                <style type="text/css">
                                    .st0 {
                                        fill: red;
                                    }
                                    .st1 {
                                        fill: blue;
                                    }
                                    .st2 {
                                        fill: yellow;
                                    }
                                </style>
                                <image style="overflow: visible;" transform="matrix(0.6077 0 0 0.6077 350.171 310.946)" width="992" height="558" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="./img/D2528064.jpg">
                                </image>
                                <path class="st0" d="M 604.5 496.6 c 0 0 -21.1 25 0 43.4 h 4 c 0 0 -20.9 -16.9 0 -43.4 H 604.5 Z" />
                                <path class="st1" d="M 647.6 509.1 c 0 0 -21.1 25 0 43.4 h 4 c 0 0 -20.9 -16.9 0 -43.4 H 647.6 Z" />
                                <path class="st2" d="M 703.3 509.1 c 0 0 -21.1 25 0 43.4 h 4 c 0 0 -20.9 -16.9 0 -43.4 H 703.3 Z" />
                                
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
@endsection