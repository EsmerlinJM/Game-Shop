<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Shop | Error</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' 
    rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
        <div class="container">
                <div class="row">
                <div class="col-md-12">
                
                    <div class="text-center">
                        <h1>¡ERROR <b> 404</b>!</h1>
                        <div class="row">
                          <div class="col-md-12">
                            <img src="{{ asset('img/error.png') }}" alt="" width="256px" height="256px">
                          </div>
                        </div>
                
                          <h2>Oops,</h2>
                        <h4>
                           está pagina que estás buscando no existe, redirigete abajo en el botón a la página de inicio.
                        </h4>
                        <br>
                        <br>
                        <a class="btn btn-primary btn-lg" href="{{ url('/') }}">
                          <i class="fa fa-repeat fa-lg"></i> Página de Inicio</a>
                      </div>
                      <br>
                </div>
                </div>
                </div>
</body>
</html>

