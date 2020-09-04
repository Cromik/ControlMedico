@extends('layouts.admin')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Consulta Pacientes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Consulta</a></li>
          <li class="breadcrumb-item active">Consulta Pacientes</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Filtros de Búsquedas</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Número Identificación:</label>
            <input type="text" class="form-control" />
          </div>
        </div>
      </div>
      <center>
        <div class="col-sm-3">
          <input type="button" id="btnBuscar" class="btn btn-block btn-primary" value="Buscar" />
        </div>
      </center>
    </div>
  </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Pacientes</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Apellidos</th>
                                    <th>Nombres</th>
                                    <th>Identificación</th>
                                    <th>Teléfono</th>
                                    <th>Detalle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($paciente as $paciente)
                                <tr>
                                    <td>{{ $paciente->apellidos }}</td>
                                    <td>{{ $paciente->nombres }}</td>
                                    <td>{{ $paciente->identificacion }}</td>
                                    <td>{{ $paciente->telefono }}</td>
                                    <td><input type="button" class="btn btn-success" onclick="DetallePaciente('{{ $paciente->id }}', '{{ $paciente->identificacion }}')" value="Ver más.." />
                                    </td>
                                </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>

@endsection