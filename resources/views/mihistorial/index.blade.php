@extends('layouts.admin')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Historial Pacientes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Consulta</a></li>
          <li class="breadcrumb-item active">Historial Pacientes</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

<div class="container-fluid">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Datos Personales</h3>
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
            <label>Codigo Paciente:</label>
            <input type="text" class="form-control" value="0001-1AB" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Nombres:</label>
            <input type="text" class="form-control" value="Joseph Vicente" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Apellidos:</label>
            <input type="text" class="form-control" value="Plúas Reyes" disabled />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Identificación:</label>
            <input type="text" class="form-control" value="0942015215" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Teléfono:</label>
            <input type="date" class="form-control" value="0942015215" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Correo Electrónico:</label>
            <input type="text" class="form-control" value="josephpluas@gmail.com" disabled />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Dirección:</label>
            <input type="text" class="form-control" value="Daule Juan Bautista Aguirre" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Fecha Inicio:</label>
            <input type="date" class="form-control" disabled />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Fecha Fin:</label>
            <input type="date" class="form-control" disabled />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista Historial del Pacientes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fecha Cambio</th>
                  <th>Descripción</th>
                  <th>Implementos</th>
                  <th>Detalle</th>
                  <th>Fotos 1</th>
                  <th>Fotos 2</th>
                  <th>Fotos 3</th>
                </tr>
              </thead>
              <tbody>
                @foreach($mihistorial as $mihistorial)
                <tr>
                  <td>{{ $mihistorial->created_at }}</td>
                  <td>{{ $mihistorial->descripcion }}</td>
                  <td>{{ $mihistorial->implemento }}</td>
                  <td><input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-foto" value="Ver más" /></td>
                  <td><input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-foto" value="Ver" /></td>
                  <td><input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-foto" value="Ver" /></td>
                  <td><input type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg-foto" value="Ver" /></td>
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
    <div class="row">
      <div class="col-sm-3">
        <input type="button" id="btnBuscar" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-lg" value="Agregar" />
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>


<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Historial</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Ingrese todos los datos necesarios.</p>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Descripción:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>
                <input id="txDescripcion" type="text" class="form-control" data-mask="" im-insert="true">
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Implementos:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                </div>
                <input id="txImplemento" type="text" class="form-control" data-mask="" im-insert="true">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleInputFile">Foto 1:</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Buscar Archivo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleInputFile">Foto 2:</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Buscar Archivo</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="exampleInputFile">Foto 3:</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Buscar Archivo</label>
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
    <!-- /.modal-content -->
  </div>
</div>

<div class="modal fade" id="modal-lg-foto">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Fotos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="exampleInputFile">Foto 1:</label>
              <div class="position-relative">
                <img src="imagenes/dinymis.jpg" alt="Photo 1" class="img-fluid">
                <div class="ribbon-wrapper ribbon-lg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp;&nbsp;Cerrar
          &nbsp;&nbsp;&nbsp;</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
</div>

<script type="text/javascript">

  function ConsultarMiHistorial(){
    
  }


  function GuardarMiHistorial() {
    $(".cartprocess").fadeTo(2500, 0.50,
      function() {
        var descripcion = $("#txDescripcion").val();
        var implementos = $("#txImplemento").val();

        if (descripcion != "" && implementos != "") {
          $.ajax({
            url: "{{ route('mihistorial.store') }}",
            type: 'POST',
            dataType: "json",

            data: {
              '_token': "{{csrf_token()}}",
              'descripcion': descripcion,
              'implemento': implementos
            },
            success: function(Retorno) {
              $('.cartprocess').hide();
              alert(Retorno.CodigoRetorno);

              $("#modal-lg").modal('hide');
            },
            error: function() {
              $('.cartprocess').hide();
              alert('A ocurrido error inesperado, vuelve a intentar más tarde.. gracias por su compresion.');
            },
          });
        } else {
          alert('Faltan campos por llenar, ingrese todos los campos..');
        }
      });
  }
</script>
@endsection