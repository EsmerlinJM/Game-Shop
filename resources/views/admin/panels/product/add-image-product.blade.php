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
<div class="col-md-6">
    
    <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Producto - Agregar una Imagen</h3>
            </div>
        
        <form class="form-horizontal form-material" method="post" action="{{ route('add-image-product') }}" enctype="multipart/form-data">
           @csrf
            <div class="box-body">
                <label>Imagen del Articulo</label>
              <div class="input-group {{ $errors->has('image') ? ' has-error' : '' }}">

                        <label class="btn btn-info btn-file">
                          <i class="fa fa-search fa-sm"></i> Buscar una imagen
                          <input name="image" id="archivo" type="file" hidden="">
                        </label>

                        @if ($errors->has('image'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
              </div>
                <br>
             <div class="input-group">
                 <label>Imagen: </label> <span class="label label-success" id="upload-file-info"></span>
             </div>
              
              <div class="form-group pull-right">
                  <div class="col-md-4">
                      
                      <button type="submit" class="btn btn-flat btn-lg btn-primary"><i class="mdi mdi-plus"></i>Agregar</button>
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
@endsection