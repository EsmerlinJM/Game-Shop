@extends('layouts.master')

@section('title')
    Game-Shop | Revisar Pago
@endsection

@section('content')
<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li>Revisar Orden - Metodo de Pago</li>
                </ul>
            </div>

            <div class="col-md-9" id="checkout">

                <div class="box">
    
                        <h1>Revisar Orden - Metodo de Pago</h1>

                        <ul class="nav nav-pills nav-justified">
                                <li><a href="{{ route('checkout-address') }}"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li><a href="{{ route('checkout-shipping') }}"><i class="fa fa-truck"></i><br>Método de Envío</a>
                                </li>
                                <li class="active"><a href="{{ route('checkout-pay') }}"><i class="fa fa-money"></i><br>Método de Pago</a>
                                </li>
                            </ul>

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="box payment-method">

                                    <h4><span><img src="{{ asset('img/paypal.png') }}"></span> Paypal</h4>

                                        <p>A todos les gusta.</p>

                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                                                <input type="hidden" name="hosted_button_id" value="9X9W57UURFN26">
                                                <input type="hidden" name="cmd" value="_ext-enter" />
                                                <input type="hidden" name="redirect_cmd" value="_xclick" />
                                                <input type="hidden" name="return" value="http://localhost:8084/app-shop/success">
                                                <input type="hidden" name="cancel_return" value="http://localhost:8084/app-shop/">
                                                <input type="hidden" name="business" value="gameshop@shop.com" />
                                                <input type="hidden" name="item_name" value="Productos de Games Shop" />
                                                <input type="hidden" name="quantity" value="1" />
                                    <input type="hidden" name="amount" value="{{ $totalPrice +=10  }}" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest" />
                                                <div class="box-footer text-center">
                                                    <input type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                    <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- /.row -->

                        </div>
                        <!-- /.content -->

                        <div class="box-footer">
                            <div class="pull-left">
                            <a href="{{ route('cart') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar al Carrito</a>
                            </div>
                
                        </div>
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