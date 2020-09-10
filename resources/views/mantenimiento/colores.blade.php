@extends('layouts.admin')

@section('content')

<body onload="myFunction()">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado de Colores</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Mantenimiento</a></li>
                        <li class="breadcrumb-item active">Colores</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Opciones</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @csrf
                
                <div class="row">
                    <div class="col-sm-3">
                        <input type="button" id="btnAgregar" onclick="modalPaciente()" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-Paciente" value="Agregar" />
                    </div>
                   
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>identificacion</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>

                                    </tr>
                                </thead>
                                <tbody>
                               
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
@endsection