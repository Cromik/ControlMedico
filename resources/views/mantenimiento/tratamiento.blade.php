@extends('layouts.admin')

@section('content')

<body onload="myFunction()">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado de Tratamientos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Mantenimiento</a></li>
                        <li class="breadcrumb-item active">Tratamientos</li>
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
                        <input type="button" id="btnAgregar" onclick="modalPaciente()" data-toggle="modal" data-target="#modal-lg" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-Paciente" value="Agregar" />
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
                            <h3 class="card-title">Registros de Tratamientos</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripción</th>
                                        <th>Valor</th>
                                        <th>SubMenú</th>
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

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Tratamiento</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Ingrese todos los datos necesarios.</p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Descripción:</label>
                                <div class="input-group">
                                    <input id="txDescripcion" type="text" class="form-control" data-mask="" im-insert="true">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label>Valor:</label>
                                <div class="input-group">
                                    <input id="txValor" type="text" class="form-control" data-mask="" im-insert="true">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label style="margin-top: 23px;"></label>
                                <div class="input-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked="">
                                        <label for="customCheckbox2" class="custom-control-label">SubMenú</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp;&nbsp;Cerrar&nbsp;&nbsp;&nbsp;</button>
                    <button type="button" onclick="GuardarMiHistorial()" class="btn btn-success">&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function modalPaciente() {

        }
    </script>
</body>

@endsection