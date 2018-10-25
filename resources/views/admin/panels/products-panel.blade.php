@extends('admin.layouts.master')

@section('title')
    Game-Shop | Panel Productos
@endsection

@section('content')

@section('page')
    Panel Productos
@endsection

@section('breadcrumb')
    Panel Productos
@endsection

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
</div>
@endif


<div class="col-md-4">
<a href="{{ route('add-image-product') }}" class="btn btn-primary btn-lg btn-flat btn-new" title="Nuevo Producto">
          <i class="fa fa-plus"></i> Nuevo Producto
      </a>
</div>
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabla de Productos</h3>
    

    <div class="box-tools">
      <div class="input-group input-group-sm" style="width: 150px;">
        <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

        <div class="input-group-btn">
          <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body table-responsive no-padding">
      
    <table class="table table-hover">
        
      <tbody><tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Imagen</th>
        <th>Descripcion</th>
        <th>Descripcion Detallada</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>En Oferta</th>
        <th>Opciones</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
      <td>{{ $product->name }}</td>
      <td>
          <span><img src="{{ secure_asset($product->image) }}" width="48px" height="48px">
        </span>
        </td>
        <td>
            {{ $product->description }}
        </td>
        <td>
            {{ $product->long_description }}
        </td>
        <td>
            ${{ number_format($product->price, 2) }}
        </td>
        <td>
            {{ $product->categories->name }}
        </td>
        <td>
            @if($product->featured == 1)
            <span class="label label-success">En oferta</span>
            @else
            <span class="label label-danger">No en Oferta</span>
            @endif
        </td>
        <td>
            <a href="#" class="btn btn-warning btn-xs btn-flat"
           name="editar" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>

        <a href="{{ url('/admin/delete/product/'.$product->id) }}" class="btn btn-danger btn-xs btn-flat" name="borrar_entrada"  data-placement="top" title="¿Quieres Eliminar Este Producto?"
               data-toggle="confirmation"
               data-btn-ok-label=""
               data-btn-ok-icon="fa fa-check"
               data-btn-ok-class="btn btn-sm btn-success"
               data-btn-cancel-label=""
               data-btn-cancel-icon="fa fa-ban"
               data-btn-cancel-class="btn btn-sm btn-danger"
               data-singleton="true"
                ><i class="fa fa-trash" aria-hidden="true"></i></a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
    </table>
    <div class="text-center">
            {{ $products->links() }}
        </div>
  </div>
  <!-- /.box-body -->
</div>
      
<!-- /.box -->
</div>
@endsection