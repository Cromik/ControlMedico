<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card-body">
      <img class="img-fluid pad" src="./img/banner.png" alt="Photo">
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Ingrese su usuario y contraseña para verificar su información</p>

        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input id="email" type="email" placeholder="Ingrese un correo..." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user-alt"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input id="password" type="password" placeholder="Ingrese una Contraseña..." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-6">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                  Recuérdame
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
            </div>
            <div class="col-12">
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                ¿No puedes iniciar sesión?
              </a>
              @endif
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>