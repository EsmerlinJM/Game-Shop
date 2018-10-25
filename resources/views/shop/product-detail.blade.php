@extends('layouts.master')

@section('title')
    Game-Shop | {{ $product->name }}
@endsection

@section('content')

<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Inicio</a>
                </li>
            <li><a href="#">{{ $product->categories->name }}</a>
                </li>
                
            <li>{{ $product->name }}</li>
            </ul>

        </div>

        @if (session('success'))

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    <div class="alert alert-success alert-dismissible" id="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Producto Agregado al Carrito</h4>
                        {{ session('success') }} <i class="icon fa fa-smile-o"></i>
                        </div>
                    </div>
              </div>
            </div>
        @endif

    @include('partials.sidebar')    

        <div class="col-md-9">

            <div class="row" id="productMain">
                <div class="col-sm-6">
                    <div id="mainImage">
                    <img src="{{ secure_asset($product->image) }}" alt="" class="img-responsive">
                    </div>
                    
                    <!-- /.ribbon -->

                    @if($product->featured == 1)
                    <div class="ribbon new">
                        <div class="theribbon">Nuevo</div>
                        <div class="ribbon-background"></div>
                    </div>
                    @endif
                    <!-- /.ribbon -->

                </div>
                <div class="col-sm-6">
                    <div class="box">
                        
                            
                    <h2 class="text-center">{{ $product->name }}</h2>
                        <p class="goToDescription"><a href="#details" class="scroll-to">Ver una descripcion más detallada</a>
                        </p>
                    <p class="price">${{ number_format($product->price, 2) }}</p>

                        <p class="text-center buttons">
                            <button type="button" data-toggle="modal" data-target="#addCar" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Añadir al Carrito</button>                           
                        </p>
                        
                        


                    </div>

                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a href="{{ secure_asset($product->image) }}" class="thumb">
                                <img src="{{ secure_asset($product->image) }}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ secure_asset($product->image) }}" class="thumb">
                                <img src="{{ secure_asset($product->image) }}" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="{{ secure_asset($product->image) }}" class="thumb">
                                <img src="{{ secure_asset($product->image) }}" alt="" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="box" id="details">
                <p>
                    <h4>Detalles del producto</h4>
                <p>{{ $product->long_description }}</p>
                    

                    <blockquote>
                        <p><em>{{ $product->description }}</em>
                        </p>
                    </blockquote>

                    <hr>
                    
            </div>

            <div class="row same-height-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height">
                        <h3>Productos que te pueden gustar</h3>
                    <img src="{{ secure_asset('img/smile.png') }}">
                    </div>
                    
                </div>
                
                @foreach ($products as $p)
                    
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
    </div>
    <!-- /.container -->
</div>
<!-- /#content -->

<!-- *** FOOTER ***
_________________________________________________________ -->
<div class="modal fade" id="addCar" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
            <h4 class="modal-title" id="myModalLabel">Agregar <b>{{ $product->name }}</b> al carrito</h4>
            </div>
                    <div class="modal-body">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="user_id" value="">
                    <input type="hidden" name="action" value="add-car">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cerrar</button>
                    <a href="{{ url('/add-to-cart/'.$product->id) }}" class="btn btn-info btn-simple">Agregar</a>
                </div>
                
        </div>
    </div>
</div>

@endsection