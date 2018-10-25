@extends('layouts.master')

@section('title')
    Game Shop | Registro
@endsection

@section('content')
<div class="container">

    <div class="col-md-12">

        <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Inicio</a>
            </li>
            <li>Nueva Cuenta / Iniciar Sesión</li>
        </ul>

    </div>

    @if (session('success'))
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
        </div>
    @endif

    <div class="col-md-6">
        <div class="box">
            <h1>Nueva Cuenta</h1>

            <p class="lead">¿Aun no te has registrado?</p>
            <p>Registratate para poder adquirir tus productos y además no te tomará más de un minuto!</p>
            

            <hr>

            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                @csrf
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Nombre</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password-confirm">Repita su Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Registrarse</button>
                </div>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="box">
            <h1>Iniciar Sesión</h1>

            <p class="lead">¿Ya estás registrado?</p>
            <p class="text-muted">Pues inicia sesión para poder adquirir tus productos</p>

            <hr>
        
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Iniciar Sesion') }}">
                        @csrf
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Correo Electrónico</label>
                            <input name="email" class="form-control" id="email" type="text"
                             {{ $errors->has('email') ? ' has-error' : '' }} value="{{ old('email') }}" required autofocus>

                             @if ($errors->has('email'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Contraseña</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" required>
            
                                    @if ($errors->has('password'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuerdame') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Iniciar Sesión</button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                        </div>
                    </form>
        </div>
    </div>


</div>
@endsection