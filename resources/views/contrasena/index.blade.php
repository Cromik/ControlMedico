@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Restablecer Pacientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Consulta</a></li>
                    <li class="breadcrumb-item active">Restablecer Contraseña</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        @csrf
                        <br>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Identificación</label>
                            <div class="col-md-6">
                                <input id="identificacion" type="text" class="form-control @error('identificacion') is-invalid @enderror" name="identificacion" value="{{ old('identificacion') }}" required autocomplete="name" autofocus>
                                @error('identificacion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" onclick="PasswordPaciente()" class="btn btn-block btn-primary">Aceptar</button><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function PasswordPaciente() {
        $(".cartprocess").fadeTo(2500, 0.50,
            function() {
                var identificacion = $("#txIdentificacion").val();
                var password = $("#txPassword").val();
                if (identificacion != "" && password != "") {
                    $.ajax({
                        url: "{{ route('contrasena.store') }}",
                        type: 'POST',
                        dataType: "json",
                        data: {
                            '_token': "{{csrf_token()}}",
                            'id': identificacions,
                            'password': password,
                        },
                        success: function(Retorno) {
                            $('.cartprocess').hide();
                            alert(Retorno.MensajeRetorno);
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