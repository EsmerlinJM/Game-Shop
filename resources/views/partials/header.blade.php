
       <div id="top">
            <div class="container">
                <div class="col-md-6 offer">
                    <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Aproveche nuestras ofertas</a>  <a href="#">Obtenemos juegos a un buen precio!</a>
                </div>
                <div class="col-md-6 animated">
                    <ul class="menu">
                        @guest
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">Iniciar Sesión</a>
                            </li>
                            <li><a href="{{ url('/register') }}">Registrarse</a>
                            </li>
                        <li><a href="{{ route('contact') }}">Contacto</a>
                            </li>
                        @else
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i> {{ Auth::user()->name }}</a>
                            </li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Cerrar Sesión</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                         @endguest           
                    </ul>
                </div>
            </div>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">
    
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="Login">Iniciar Sesión</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input name="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" id="email-modal"
                                     placeholder="Correo Electrónico" type="text" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input name="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" id="password-modal" placeholder="Contraseña" type="password">
                                    @if ($errors->has('password'))
                                        <span class="help-block" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
    
                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Iniciar sesión</button>
                                </p>
    
                            </form>
    
                            <p class="text-center text-muted">¿Todavía no estás registrado?</p>
                            <p class="text-center text-muted"><a href="{{ route('register') }}"><strong>Registrate ahora</strong></a> Es muy facil no te tomará mas de 1&nbsp;minuto!</p>
    
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                <div class="container">
                    <div class="navbar-header">
        
                        <a class="navbar-brand home" href="{{ url('/') }}" data-animate-hover="bounce">
                            <img src="{{ asset('img/logo.png') }}" alt="Game Shop Logo" class="hidden-xs">
                            <img src="{{ asset('img/logo-small.png') }}" alt="Game Shop Logo" class="visible-xs"><span class="sr-only">Game Shop - Página de Inicio</span>
                        </a>
                        <div class="navbar-buttons">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                                <span class="sr-only">Navegacion</span>
                                <i class="fa fa-align-justify"></i>
                            </button>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                                <span class="sr-only">Buscador</span>
                                <i class="fa fa-search"></i>
                            </button>
                            <a class="btn btn-default navbar-toggle" href="{{ route('cart') }}">
                                <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">
                                        Carrito <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></span>
                            </a>
                        </div>
                    </div>
                    <!--/.navbar-header -->
        
                    <div class="navbar-collapse collapse" id="navigation">
        
                        <ul class="nav navbar-nav navbar-left">
                        <li class="active"><a href="{{ url('/') }}">Inicio</a>
                            </li>
                            <li class="dropdown yamm-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Plataformas <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h5><span><img src="{{ asset('img/pc.png') }}"></span> PC's</h5>
                                                    <ul>
                                                            <li><a href="{{ route('category-platform') }}"> Revisar</a>
                                                            </li>
                                                           
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                        <h5><span><img src="{{ asset('img/playstation.png') }}"></span> PlayStation</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-platform') }}">Revisar</a>
                                                            </li>
                                                        </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                <h5><span><img src="{{ asset('img/xbox.png') }}"></span> Xbox</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-platform') }}">Revisar</a>
                                                            </li>                                                                                                            
                                                        </ul>
                                                </div>
                                                <div class="col-sm-3">
                                                <h5><span><img src="{{ asset('img/nintendo.png') }}"></span> Nintendo</h5>
                                                        <ul>
                                                        <li><a href="{{ route('category-platform') }}">  Revisar</a>
                                                        </li>
                                                        </ul>
                                                       
                                                    </div>
                                            </div>
                                        </div>
                                        <!-- /.yamm-content -->
                                    </li>
                                </ul>
                            </li>
        
                            <li class="dropdown yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Códigos <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5><span><img src="{{ asset('img/steam.png') }}"></span> Steam</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-code') }}">Revisar</a>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5><span><img src="{{ asset('img/origin.png') }}"></span> Origin</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-code') }}">Revisar</a>
                                                            </li>
                             
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5><span><img src="{{ asset('img/playstation.png') }}"></span> PlayStation Store</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-code') }}">Revisar</a>
                                                            </li>
                              
                                                        </ul>
                                                        <h5><span><img src="{{ asset('img/xbox.png') }}"></span> Xbox</h5>
                                                        <ul>
                                                            <li><a href="{{ route('category-code') }}">Revisar</a>
                                                            </li>
                             
                                                        </ul>
                                                        
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="{{ asset('img/descuento.jpg') }}" class="img img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="banner">
                                                            <a href="#">
                                                                <img src="{{ asset('img/overwatch_especial.png') }}" class="img img-responsive" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.yamm-content -->
                                        </li>
                                    </ul>
                                </li>
        
                            
                        </ul>
        
                    </div>
                    <!--/.nav-collapse -->
        
                    <div class="navbar-buttons">
        
                        <div class="navbar-collapse collapse right" id="basket-overview">
                        <a href="{{ route('cart') }}" class="btn btn-primary navbar-btn">
                                    Carrito <i class="fa fa-shopping-cart"></i> <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span><span class="hidden-sm"></span>
                            </a>
                        </div>
                        <!--/.nav-collapse -->
        
                        <div class="navbar-collapse collapse right" id="search-not-mobile">
                            <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                                <span class="sr-only">Buscador</span>
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
        
                    </div>
        
                    <div class="collapse clearfix" id="search">
        
                    <form class="navbar-form" role="search" method="GET" action="{{ route('search') }}">
                        @csrf
                            <div class="input-group">
                                <input name="search" class="form-control" placeholder="Buscar articulo" type="text">
                                <span class="input-group-btn">
        
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
        
                    </span>
                            </div>
                        </form>
        
                    </div>
                    <!--/.nav-collapse -->
        
                </div>
                <!-- /.container -->
            </div>
    
    
    
    
    