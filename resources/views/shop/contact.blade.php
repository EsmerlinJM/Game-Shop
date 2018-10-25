@extends('layouts.master')

@section('title')
    Game-Shop | Contacto
@endsection

@section('content')
<div id="content">
    <div class="container">

        <div class="col-md-12">
            <ul class="breadcrumb">
            <li><a href="{{ route('home') }}">Inicio</a>
                </li>
                <li>Contacto</li>
            </ul>

        </div>

        <div class="col-md-3">
            <!-- *** PAGES MENU ***
_________________________________________________________ -->
            <div class="panel panel-default sidebar-menu">

                <div class="panel-heading">
                    <h3 class="panel-title">Paginas</h3>
                </div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                        <a href="{{ route('category-platform') }}">Plataformas</a>
                        </li>
                        <li>
                        <a href="{{ route('category-code') }}">Codigos</a>
                        </li>

                    </ul>

                </div>
            </div>

            <!-- *** PAGES MENU END *** -->


            <div class="banner">
                <a href="#">
                    <img src="{{ asset('img/descuento.jpg') }}" alt="descuento" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="col-md-9">


            <div class="box" id="contact">
                <h1>Contacto</h1>

                <p class="lead">¿Tienes curiosidad de algo o tienes problemas con alguno de nuestros productos?</p>
                <p>Por favor describenos tu problema para darle una solucion a este.</p>

                <hr>

                <div class="row">
                    <div class="col-sm-4">
                        <h3><i class="fa fa-map-marker"></i> Direccion</h3>
                        <p>Av. Lorem Ipsum dolo sit
                            <br>Calle. Maximus Dul
                            <br>No. 52
                            <br>Santo Domingo
                            <br>
                            <strong>Rep.Dom</strong>
                        </p>
                    </div>
                    
                    <div class="col-sm-6">
                        <h3><i class="fa fa-envelope"></i> Soporte Electronico</h3>
                        <p class="text-muted">Por favor escribenos a nuestros emails colocados a aqui abajo</p>
                        <ul>
                            <li><strong><a href="mailto:">appgameshop01@gmail.com</a></strong>
                            </li>   
                        </ul>
                    </div>
                    <!-- /.col-sm-4 -->
                </div>
                <!-- /.row -->

                

                <hr>
                


            </div>


        </div>
        <!-- /.col-md-9 -->
    </div>
    <!-- /.container -->
</div>
@endsection