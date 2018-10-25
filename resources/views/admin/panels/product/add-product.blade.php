@extends('admin.layouts.master')

@section('title')
    Game-Shop | Agregar Producto
@endsection

@section('content')

@section('page')
    Agregar Producto
@endsection

@section('breadcrumb')
<a href="{{ route('products-panel') }}">Panel Productos</a> 
@endsection

<div class="row">
        <div class="col-md-6">
    
                <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Registar Producto</h3>
                        </div>
                    
                    <form class="form-horizontal form-material" method="post" action="{{ route('add-product') }}">
                        @csrf
                        <div class="box-body">
                            <label>Nombre del Articulo</label>
                          <div class="input-group">
                              
                            <span class="input-group-addon"><i class="fa fa-cubes"></i></span>
                            <input class="form-control" placeholder="Nombre del Articulo" name="name" type="text">
                          </div>
            
                          
                          <div class="input-group">
                              
                              <label>Descripcion</label>
                              <textarea class="form-control" name="description" rows="3" placeholder="Una breve descripcion del producto"></textarea>
                              
                          </div>
                          <div class="input-group">
                              
                              <label>Descripcion detallada</label>
                              <textarea class="form-control" name="long_description" rows="3" placeholder="Una descripcion más detallada del producto"></textarea>
                              
                          </div>  
                          
                          <label>Precio</label>
                          <div class="input-group">
                              
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="text" placeholder="Precio" name="price">
                            <span class="input-group-addon">.00</span>
                          </div>
                          
                          <div class="input-group">
                              <label for="featured">Destacada</label>
                                  <select class="form-control" id="featured" name="featured">
                                    <option selected value="1">Si</option>
                                    <option value="0">No</option>
                                  </select>
                          </div>
                          <div class="input-group">
                              <label for="catgory">Categoria</label>
                                  <select class="form-control" id="category" name="category">
                                    <option selected value="1">Plataformas</option>
                                    <option value="2">Códigos</option>
                                  </select>
                          </div>
                          
                          
                          
                          <div class="form-group pull-right">
                              <div class="col-md-4">
                                  <input type="hidden" name="action" value="add">
                              <input type="hidden" name="image" value="{{ $imagePath }}">
                                  <button type="submit" class="btn btn-flat btn-lg btn-primary"><i class="mdi mdi-plus"></i>Agregar Producto</button>
                              </div>
                          </div>
                          <!-- /.row -->
            
                          
                          <!-- /input-group -->
                        </div>
                    </form>
                       
                        
                        <!-- /.box-body -->
                      </div>
            
                <!-- /.content -->
              </div>


        <div class="col-md-6">
                <div class="box box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">Imagen del Producto</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body text-center">
                    
                  <img src="{{ secure_asset($imagePath) }}" alt="" class="img-responsive">
                    
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
</div>

@endsection