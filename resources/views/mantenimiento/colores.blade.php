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
                        <input type="button" id="btnAgregar" onclick="modalPaciente()" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-lg" value="Agregar" />
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
                            <h3 class="card-title">Registros de Colores</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Descripcion</th>
                                        <th>Valor</th>
                                        <th>Color</th>
                                        <th>Estado</th>
                                        <th>---</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Rojo</td>
                                        <td>#9E2222</td>
                                        <td>Color</td>
                                        <td><i style="background-color: #FF0000; color: #FF0000;" class="fas fa-square fa-lg"></i></td>
                                        <td><button type="submit" onclick="btnSavePaciente()" class="btn btn-success">Modificar</button></td>
                                    </tr>
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
                    <h4 class="modal-title">Registrar Colores Brackers</h4>
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
                                <input type="text" class="form-control my-colorpicker1 colorpicker-element" data-colorpicker-id="1" data-original-title="" title="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label style="margin-top: 23px;"></label>
                                <div class="input-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked="">
                                        <label for="customCheckbox2" class="custom-control-label">Estado</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-success btn-block">&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;</button>
                        </div>
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cerrar
                                &nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </div>
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