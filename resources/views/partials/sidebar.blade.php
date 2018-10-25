<div class="col-md-3">
    <!-- *** MENUS AND FILTERS ***
_________________________________________________________ -->
    <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Categories</h3>
        </div>

        <div class="panel-body">
            <ul class="nav nav-pills nav-stacked category-menu">

                <li class="active">
                <a href="{{ route('category-platform') }}">Plataformas</a>
                    <ul>
                        <li><a href="#">PC's</a>
                        </li>
                        <li><a href="#">Playstation</a>
                        </li>
                        <li><a href="#">Xbox</a>
                        </li>
                        <li><a href="#">Nintendo</a>
                        </li>
                    </ul>
                </li>
                
                <li class="active">
                <a href="{{ route('category-code') }}">Codigos</a>
                    <ul>
                        <li><a href="#">Steam</a>
                        </li>
                        <li><a href="#">Origin</a>
                        </li>
                        <li><a href="#">Playstation Store</a>
                        </li>
                        <li><a href="#">Xbox</a>
                        </li>
                    </ul>
                </li>
                

            </ul>

        </div>
    </div>

    {{-- <div class="panel panel-default sidebar-menu">

        <div class="panel-heading">
            <h3 class="panel-title">Filtros <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-trash-o"></i> Limpiar</a></h3>
        </div>

        <div class="panel-body">

            <form>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Xbox 360 (10)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Xbox One (12)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Playstation 3 (15)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Playstation 4(15)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Wii U(15)
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Nintendo Switch(15)
                        </label>
                    </div>
                </div>

                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Aplicar</button>

            </form>

        </div>
    </div> --}}

    <!-- *** MENUS AND FILTERS END *** -->

    <div class="banner">
        <a href="#">
        <img src="{{ asset('img/descuento.jpg') }}" alt="descuento" class="img-responsive">
        </a>
    </div>
</div>
