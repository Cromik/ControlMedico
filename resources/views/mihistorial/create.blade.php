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
            <form action="{{ route('mihistorial.store') }}" method="post">
                @csrf
                <p>Ingrese todos los datos necesarios.</p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Descripción:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                </div>
                                <input id="descripcion" name="descripcion" type="text" class="form-control" data-mask="" im-insert="true" required>
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
                                <input id="implemento" type="text" name="implemento" class="form-control" data-mask="" im-insert="true" required>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;</button>
            </form>

        </div>
    </div>
</div>

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
            @csrf
            
            <p>Ingrese todos los datos necesarios.</p>
            <input id="ids" value="7" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Descripción:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                            </div>
                            <input id="descripcion1" type="text" class="form-control" data-mask="" im-insert="true">
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
                            <input id="implemento1" type="text" class="form-control" data-mask="" im-insert="true">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" onclick="GuardarMiHistorial()">&nbsp;&nbsp;&nbsp;Guardar&nbsp;&nbsp;&nbsp;</button>
        </div>
    </div>
</div>




<script type="text/javascript">
    function GuardarMiHistorial() {

        $(".cartprocess").fadeTo(2500, 0.50,
            function() {
                var descripcion = $("#descripcion1").val();
                var implementos = $("#implemento1").val();

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