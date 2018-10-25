@extends('layouts.master')

@section('title')
    Game-Shop | Cuenta Confirmada
@endsection

@section('content')

    <div class="container">
            <div class="col-md-12 animated fadeInUp" data-animate="fadeInUp" style="opacity: 0;">
            
                <div id="blog-homepage" class="row">
                    <div class="col-md-9 col-md-offset-4">
                    <div class="col-sm-6">
                        <div class="post">
                            <h3><b>Cuenta Confirmada</b> <i class="fa fa-smile-o fa-lg"></i></h3>
                            <hr>
            
                            Tu cuenta ha sido verificada. Clickea aqui para <a href="{{ url('/login') }}">Iniciar Sesión</a>
                        </div>
                        </div>
                    </div>
            
                </div>
                <!-- /#blog-homepage -->
            </div>
            </div>
@endsection