@extends('layouts.master')

@section('title')
    Game-Shop | Inicio de Sesion
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center col-md-6 col-md-offset-3">
            <div class="box">
                    <h1>Iniciar Sesión</h1>
        
                    <p class="lead">¿No estás registrado?</p>
                    <p class="text-muted">Pues registrate <a href="{{ route('register') }}">aqui</a> para poder adquirir tus productos</p>
        
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
