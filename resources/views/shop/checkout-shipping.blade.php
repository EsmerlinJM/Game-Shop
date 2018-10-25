@extends('layouts.master')

@section('title')
    Game-Shop | Revisar Envio
@endsection

@section('content')
<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li>Revisar Orden - Metodo de Envio</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
                <form method="post" action="{{ route('checkout-shipping') }}">
                    @csrf
                        <h1>Revisar Orden - Metodo de Envio</h1>

                        <ul class="nav nav-pills nav-justified">
                                <li><a href="{{ route('checkout-address') }}"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="active"><a href="{{ route('checkout-shipping') }}"><i class="fa fa-truck"></i><br>Método de Envío</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Método de Pago</a>
                                </li>
                            </ul>

                        <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4><span><img src="{{ asset('img/dhl.png') }}"></span> DHL Siguiente Dia</h4>

                                            <p>Obtener el producto al siguente dia - La opcion más rapida posible.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="delivery" value="DHL" checked>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4><span><img src="{{ asset('img/fedex.png') }}"></span> FEDEX Siguiente Dia</h4>

                                            <p>Obtener el producto al siguente dia - La opcion más rapida posible.</p>

                                            <div class="box-footer text-center">
                                                <input type="radio" name="delivery" value="FEDEX">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4><span><img src="{{ asset('img/ups.png') }}"></span> UPS Siguiente Dia</h4>

                                            <p>Obtener el producto al siguente dia - La opcion más rapida posible.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="delivery" value="UPS">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                                
                                <input type="hidden" name="address" value="{{ session('address') }}">

                            </div>
                        <!-- /.content -->

                        <div class="box-footer">
                            <div class="pull-left">
                            <a href="{{ route('cart') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar al Carrito</a>
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">Continuar con el Metodo de Pago<i class="fa fa-chevron-right"></i>
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