@extends('layouts.master')

@section('title')
    Game-Shop | Busqueda
@endsection

@section('content')

<div id="content">
        <div class="container">

            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li>Busqueda</li>
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
                <div class="box">
                    <h1>Resultado de la busqueda</h1>
                    
                </div>

                
                
                <div class="row products">
                    
                    @if(count($products) > 0 && $products != null)
                    
                    @foreach ($products as $p)
                    <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{ url('/product-detail/'.$p->id) }}">
                                            <img src="{{ asset($p->image) }}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{ url('/product-detail/'.$p->id) }}">
                                                <img src="{{ asset($p->image) }}" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ url('/product-detail/'.$p->id) }}" class="invisible">
                                    <img src="{{ asset($p->image) }}" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                <h3><a href="{{ url('/product-detail/'.$p->id) }}">{{ $p->name }}</a></h3>
                                    <p class="price">${{ number_format($p->price, 2) }}</p>
                                    <p class="buttons">
                                        <a href="{{ url('/product-detail/'.$p->id) }}" class="btn btn-default">Ver Detalles</a>
                                        
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                    @endforeach
                </div>
                <div class="pages">
                        {{ $products->links() }}
                    </div> 
                    @else
                    <<div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="text-center">
                                    <img src="{{ asset('img/packing.png') }}">
                                    </div>
                                    <br>
                                    <div class="alert alert-success alert-dismissible fade in text-center" role="alert">
                                        <div class="text">
                                            <h3><strong></strong>
                                               Producto no encontrado
                                                <i class="fa fa-ban"></i></h3>
                                                <p>Este productos que tratas de buscar no fue encontrado o no existe</p>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    @endif

                    </div>

                    <!-- /.col-md-4 -->
                </div>
                <!-- /.products -->

                
                        


            </div>
            <!-- /.col-md-9 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
    {{-- <div class="modal fade" id="addCar" tabindex="-1" role="dialog" aria-labelledby="myModalLavel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            &times;
                        </button>
                    <h4 class="modal-title" id="myModalLabel">Agregar <b>{{ $p->name }}</b> al carrito</h4>
                    </div>
                            <div class="modal-body">
                            <input type="hidden" name="product_id" value="{{ $p->id }}">
                            <input type="hidden" name="user_id" value="">
                            <input type="hidden" name="action" value="add-car">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Cerrar</button>
                            <a href="{{ url('/add-to-cart/'.$p->id) }}" class="btn btn-info btn-simple">Agregar</a>
                        </div>
                        
                </div>
            </div>
        </div> --}}

@endsection