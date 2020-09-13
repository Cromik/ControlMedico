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
                                        <th>teléfono</th>
                                        <th>---</th>
                                        <th>---</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach( $paciente as $paciente)
                                    <tr>
                                        <td>{{$paciente->identificacion}}</td>
                                        <td>{{$paciente->name}}</td>
                                        <td>{{$paciente->email}}</td>
                                        <td>{{$paciente->telefono}}</td>
                                        <td><input type="button" class="btn btn-success" value="Modificar" /></td>
                                        <td><input type="button" class="btn btn-success" value="Eliminar" /></td>
                                    </tr>
                                    @endforeach
                                    </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-Paciente">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registrar Paciente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" class="form-control" id="idPaciente" value="0" data-mask="" im-insert="true">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Nombres:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txNombres" type="text" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres') }}" required autocomplete="name" autofocus>
                                    @error('nombres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Apellidos:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txApellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos') }}" required autocomplete="name" autofocus>
                                    @error('apellidos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Género:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <select id="txGenero" class="form-control" style="width: 100%;">
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Identificación:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txIdentificacion" type="text" class="form-control @error('identificacion') is-invalid @enderror" value="{{ old('identificacion') }}" required autocomplete="name" autofocus>
                                    @error('identificacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Correo Electrónico:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txEmail" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label>Teléfono:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txTelefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="email" value="{{ old('telefono') }}" required autocomplete="email">
                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Dirección Domicilio:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txDireccion" type="text" class="form-control @error('domicilio') is-invalid @enderror" value="{{ old('domicilio') }}" required autocomplete="name" autofocus>
                                    @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="idDivContrasena">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Confirmar Contraseña:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user-alt"></i></span>
                                    </div>
                                    <input id="txPassword-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    @error('domicilio')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <button type="submit" onclick="btnSavePaciente()" class="btn btn-success btn-block">&nbsp;&nbsp;&nbsp;Registrar&nbsp;&nbsp;&nbsp;</button>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cerrar
                                &nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>  
        function myFunction() {
            var identificacion = $("#idIdentificacion").val();
            var urlAction = "{{ route('paciente.getpaciente') }}";
            var token = "{{csrf_token()}}";
        }
    


        function modalPaciente() {
            $('#idDivContrasena').show()
        }

        function DetallePaciente(idPaciente, identificacion, direccion, nombres, apellidos, email, telefono) {
            $("#idPaciente").val(idPaciente);
            $("#txNombres").val(nombres);
            $("#txApellidos").val(apellidos);
            $("#txIdentificacion").val(identificacion);
            $("#txEmail").val(email);
            $("#txTelefono").val(telefono);
            $("#txDireccion").val(direccion);
            $('#idDivContrasena').hide()
            $("#modal-Paciente").modal('show');
        }

        function btnSavePaciente() {
            var idPaciente = $("#idPaciente").val();
            var nombres = $("#txNombres").val();
            var apellidos = $("#txApellidos").val();
            var email = $("#txEmail").val();
            var telefono = $("#txTelefono").val();
            var domicilio = $("#txDireccion").val();
            var genero = $("#txGenero").val();
            var identificacion = $("#txIdentificacion").val();
            var password = $("#txPassword").val();
            var primerNombre = nombres.split(' ');
            var primerApellido = apellidos.split(' ');
            var name = primerNombre[0] + " " + primerApellido[0];
            var urlAction = "{{ route('paciente.store') }}";
            var token = "{{csrf_token()}}";

            savePaciente(idPaciente, nombres, apellidos, email, telefono, domicilio, identificacion,
                password, genero, name, urlAction, token)
        }

        function btnDeletePaciente(idPaciente) {
            var routeAction = "{{ route('paciente.delete') }}";
            var tokenValidacion = "{{csrf_token()}}";
            deletePaciente(idPaciente, routeAction, tokenValidacion);
        }

        function btnGetPaciente() {
            alert("Ok");
            var identificacion = $("#idIdentificacion").val();
            var urlAction = "{{ route('paciente.getpaciente') }}";
            var token = "{{csrf_token()}}";

            getPaciente1(identificacion, urlAction, token);
        }
    </script>
</body>
@endsection