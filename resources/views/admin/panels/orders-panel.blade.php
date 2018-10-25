@extends('admin.layouts.master')

@section('title')
    Game-Shop | Panel Ordenes
@endsection

@section('content')

@section('page')
    Panel Ordenes
@endsection

@section('breadcrumb')
    Panel Ordenes
@endsection

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
</div>
@endif

<div class="col-xs-12">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabla de Ordenes</h3>
    

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
        <th>Usuario</th>
        <th>Metodo de Envio</th>
        <th>Direccion</th>
        <th>Estado de Orden</th>
        <th>Total</th>
        <th>Orden Creada</th>
        <th>Opciones</th>
      </tr>
      @foreach($orders as $order)
      <tr>
        <td>{{ $order->id }}</td>
      <td>{{ $order->users->name }}</td>
      <td>
          @if($order->method_shipping == 'FEDEX')
            <span><img src="{{ asset('img/fedex.png') }}" class="img-responsive"></span>
            @endif
            @if($order->method_shipping == 'DHL')
            <span><img src="{{ asset('img/dhl.png') }}" class="img-responsive"></span>
            @endif
            @if($order->method_shipping == 'UPS')
            <span><img src="{{ asset('img/ups.png') }}" class="img-responsive"></span>
            @endif
        </td>
        <td>
            {{ $order->address }}
        </td>
        <td>
            @if($order->status == 'pending')
            <span class="label label-warning">Pendiente</span>
            @endif
            @if($order->status == 'in_process')
            <span class="label label-info">En Proceso</span>
            @endif
            @if($order->status == 'shipping')
            <span class="label label-success">Recibido</span>
            @endif
        </td>
        <td>
            ${{ number_format($order->total, 2) }}
        </td>
        <td>
            {{ date('d/m/Y h:i:s A', strtotime($order->created_at )) }}
        </td>
        
        <td>
        <a href="{{ url('admin/edit/order/'.$order->id) }}" class="btn btn-warning btn-xs btn-flat"
           name="editar" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>

                <a href="{{ url('admin/delete/order/'.$order->id) }}" class="btn btn-danger btn-xs btn-flat" name="borrar_entrada"  data-placement="top" title="¿Quieres Eliminar Esta Orden?"
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
        {{ $orders->links() }}
    </div>
  </div>
  <!-- /.box-body -->
</div>
      
<!-- /.box -->
</div>
@endsection