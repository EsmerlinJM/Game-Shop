@extends('layouts.master')

@section('title')
    Game-Shop | Carrito
@endsection

@section('content')
<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Inicio</a>
                </li>
                <li>Carrito de Compras</li>
            </ul>
        </div>

        <div class="col-md-9" id="basket">

            <div class="box">

                    <h1>Carrito</h1>
                    @if(Session::has('cart'))
                        <p class="text-muted">Actualmente tienes {{ count($products) }} articulo(s) en tu carrito.</p>
                        @else
                        <p class="text-muted">No hay productos en el carrito</p>
                    @endif
                    
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio por unidad</th>
                                    <th>Descuento</th>
                                    <th colspan="2">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Session::has('cart'))
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <a href="#">
                                            <img src="{{ $product['item']['image'] }}" alt="White Blouse Armani">
                                            </a>
                                        </td>
                                        <td><a href="#">{{ $product['item']['name'] }}</a>
                                        </td>
                                        <td>
                                        <input type="number" value="{{ $product['qty'] }}" class="form-control" readonly>
                                        </td>
                                        <td>${{ $product['item']['price'] }}</td>
                                        <td>$0.00</td>
                                        <td>${{ $product['price'] }}</td>
                                    <td><a href="{{ url('/cart/remove/'.$product['item']['id']) }}"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else

                                @endif
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2">$
                                        @if(Session::has('cart'))
                                            {{ $totalPrice }}
                                        @else
                                        0    
                                        @endif
                                        
                                    </th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                    <!-- /.table-responsive -->

                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="{{ url('/') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continuar Comprando</a>
                        </div>
                        @if(Session::has('cart'))
                        <div class="pull-right">
                            
                        <a href="{{ route('checkout-address') }}" class="btn btn-primary">Proceder a Revisar <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                        @endif
                    </div>

            </div>
            <!-- /.box -->


            <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height" style="height: auto;">
                        <h3>Productos que te pueden gustar</h3>
                        <img src="{{ secure_asset('img/smile.png') }}">
                    </div>
                </div>

                @foreach ($productsChunk as $p)
                    
                <div class="col-md-3 col-sm-6">
                    <div class="product same-height">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="{{ url('/product-detail/'.$p->id) }}">
                                        <img src="{{ secure_asset($p->image) }}" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="{{ url('/product-detail/'.$p->id) }}">
                                        <img src="{{ secure_asset($p->image) }}" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/product-detail/'.$p->id) }}" class="invisible">
                            <img src="{{ secure_asset($p->image) }}" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <a href="{{ url('/product-detail/'.$p->id) }}"> <h3>{{ $p->name }}</h3></a>
                            <p class="price">${{ number_format($p->price, 2) }}</p>
                        </div>
                    </div>
                    <!-- /.product -->
                </div>
                  
                  @endforeach

            </div>


        </div>
        <!-- /.col-md-9 -->

        <div class="col-md-3">
            <div class="box" id="order-summary">
                <div class="box-header">
                    <h3>Resumen de la orden</h3>
                </div>
            
                @include('partials.order-summary')

            </div>


            

        </div>
        <!-- /.col-md-3 -->

    </div>
    <!-- /.container -->
</div>
@endsection