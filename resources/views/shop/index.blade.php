@extends('layouts.master')

@section('title')
    Game-Shop | Inicio
@endsection

@section('content')
    

                    <div class="container">
                        <div class="col-md-12">
                            <div id="main-slider">
                                <div class="item">
                                    <img src="{{ asset('img/zelda.jpg') }}" alt="" class="img-responsive">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('img/gtav.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('img/destiny2.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('img/pugb.jpg') }}" alt="">
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('img/fifa18.jpg') }}" alt="">
                                </div>
                            </div>
                            <!-- /#main-slider -->
                        </div>
                    </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
        <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-shield"></i>
                                </div>

                                <h3><a href="#">Seguridad</a></h3>
                                <p>Pago seguro a traves de paypal.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-truck"></i>
                                </div>

                                <h3><a href="#">Entrega Rápida</a></h3>
                                <p>Entregamos su producto para que pueda jugarlo lo más rapido posible.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <div class="icon"><i class="fa fa-credit-card"></i>
                                </div>

                                <h3><a href="#">Pago Cómodo</a></h3>
                                <p>Precios muy asequibles.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
 <div id="hot">

        <div class="box">
            <div class="container">
                <div class="col-md-12">
                    <h2>Destacado de Este Mes</h2>
                </div>
            </div>
        </div>
        

        <div class="container">
            <div class="product-slider">
               @if(count($products) > 0)
               @foreach ($products as $product)
               <div class="item">
                   <div class="product">
                       <div class="flip-container">
                           <div class="flipper">
                               <div class="front">
                                   <a href="{{ url('/product-detail/'.$product->id) }}">
                                       <img src="{{ asset($product->image) }}" alt="" class="img-responsive">
                                   </a>
                               </div>
                               <div class="back">
                                   <a href="{{ url('/product-detail/'.$product->id) }}">
                                       <img src="{{ asset($product->image) }}" alt="" class="img-responsive">
                                   </a>
                               </div>
                           </div>
                       </div>
                       <a href="{{ url('/product-detail/'.$product->id) }}" class="invisible">
                           <img src="{{ asset($product->image) }}" alt="" class="img-responsive">
                       </a>
                       <div class="text">
                       <h3><a href="{{ url('/product-detail/'.$product->id) }}">{{ $product->name }}</a></h3>
                           <p class="price">${{ number_format($product->price, 2) }}</p>
                       </div>
                       <!-- /.text -->
                       @if ($product->featured == 1)
                       <div class="ribbon new">
                           <div class="theribbon">Nuevo</div>
                           <div class="ribbon-background"></div>
                       </div>
                       @endif
                       

                   </div>
                   <!-- /.product -->
               </div>
               @endforeach
               @endif
            </div>
            <!-- /.product-slider -->
        </div>
        <!-- /.container -->

    </div>
    <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** GET INSPIRED ***
 _________________________________________________________ -->
            

            <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

 <div id="hot" class="box">

        <div class="container">
            <div class="col-md-12">
                <h2>Privilegios con Nosotros</h3>
            </div>
        </div>
    </div>

    <div id="advantages">

            <div class="container">
            <div class="same-height-row">
                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-heart"></i>
                        </div>

                        <h3><a href="#">Nos preocupamos por nuestros clientes</a></h3>
                        <p>
                            Proveemos los mejores productos para nuestros queridos gamers.
                        </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-tags"></i>
                        </div>

                        <h3><a href="#">Mejores Precios</a></h3>
                        <p>
                        Ajustamos nuestros precios para ti.</p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="box same-height clickable">
                        <div class="icon"><i class="fa fa-thumbs-up"></i>
                        </div>

                        <h3><a href="#">Garantía Ante Todo</a></h3>
                        <p>3 meses de garantía!!! Asi podras decidir si te quedas con el juego o no.</p>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /#advantages -->

@endsection