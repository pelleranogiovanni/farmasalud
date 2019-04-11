@extends('layouts.app')

@section('content')


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 center">SIS-FARMASALUD</h1>
    <p class="lead">Bienvenido al Sistema de Gestión de Inventario de FarmaSalud S.R.L.</p>
  </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" {{ __('Login') }}>
                        <h3 class="panel-title">Ingrese los Datos</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Usuario" name="email" type="email" autofocus value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" name="password" type="password" value="" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recordarme') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                {{-- <a href="index.html" type="submit" class="btn btn-lg btn-success btn-block">Iniciar Sesión</a> --}}
                                <div class="form-group row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-lg btn-success btn-block">
                                            {{ __('Iniciar Sesión') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </fieldset>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
