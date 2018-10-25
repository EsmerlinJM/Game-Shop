@extends('layouts.master')

@section('title')
    Game-Shop | Revisar Direccion
@endsection

@section('content')

<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li>Revisar Orden - Direccion</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
                <form method="post" action="{{ route('checkout-address') }}">
                    @csrf
                        <h1>Revisar Orden - Direccion</h1>

                        <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="{{ route('checkout-address') }}"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Método de Envío</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Método de Pago</a>
                                </li>
                            </ul>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label for="firstname">Nombre</label>
                                    <input name="name" type="text" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" id="firstname" value="{{ Auth::user()->name }}" readonly>
                                        @if ($errors->has('name'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label for="lastname">Apellido</label>
                                        <input name="lastname" type="text" class="form-control {{ $errors->has('lastname') ? ' has-error' : '' }}" id="lastname">
                                        @if ($errors->has('lastname'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('lastname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label for="phone">Telefono</label>
                                        <input name="phone" type="text" class="form-control {{ $errors->has('phone') ? ' has-error' : '' }}" id="phone">
                                        @if ($errors->has('phone'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" id="email" value="{{ Auth::user()->email }}" readonly>
                                        @if ($errors->has('email'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.row -->

                            <div class="row">
                        
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group {{ $errors->has('zip') ? ' has-error' : '' }}">
                                        <label for="zip">ZIP</label>
                                        <input name="zip" type="text" class="form-control {{ $errors->has('zip') ? ' has-error' : '' }}" id="zip">
                                        @if ($errors->has('zip'))
                                            <span class="help-block" role="alert">
                                                <strong>{{ $errors->first('zip') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                        <div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
                                            <label for="city">Ciudad</label>
                                            <input name="city" type="text" class="form-control {{ $errors->has('city') ? ' has-error' : '' }}" id="city">
                                            @if ($errors->has('city'))
                                            <span class="help-block" role="alert">
                                                     <strong>{{ $errors->first('city') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group {{ $errors->has('state') ? ' has-error' : '' }}">
                                        <label for="state">Estado</label>
                                        <input name="state" type="text" class="form-control {{ $errors->has('state') ? ' has-error' : '' }}" id="state">
                                        @if ($errors->has('state'))
                                            <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group {{ $errors->has('country') ? ' has-error' : '' }}">
                                        <label for="country">Provincia</label>
                                        <input name="country" type="text" class="form-control {{ $errors->has('country') ? ' has-error' : '' }}" id="country">
                                        @if ($errors->has('country'))
                                            <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                                        <label for="contact">Contacto (Tel o Persona)</label>
                                        <input name="contact" type="text" class="form-control {{ $errors->has('contact') ? ' has-error' : '' }}" id="contact">
                                        @if ($errors->has('contact'))
                                            <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('contact') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('street') ? ' has-error' : '' }}">
                                        <label for="street">Calle</label>
                                        <input name="street" type="text" class="form-control {{ $errors->has('street') ? ' has-error' : '' }}" id="street">
                                        @if ($errors->has('street'))
                                            <span class="help-block" role="alert">
                                                    <strong>{{ $errors->first('street') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <!-- /.row -->
                        </div>

                        <div class="box-footer">
                            <div class="pull-left">
                            <a href="{{ route('cart') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar al carrito</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Continuar con el metodo de envio<i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col-md-9 -->

            <div class="col-md-3">

                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Resumen de la Orden</h3>
                    </div>
                    

                    @include('partials.order-summary')

                </div>

            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>

@endsection