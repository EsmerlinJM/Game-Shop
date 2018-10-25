@extends('admin.layouts.master')

@section('title')
    Game-Shop | Editar Orden
@endsection

@section('content')

@section('page')
    Editar Orden
@endsection

@section('breadcrumb')
<a href="{{ route('orders-panel') }}">Panel Ordenes</a> 
@endsection

<div class="row">
        <div class="col-md-6">
    
                <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Editar Orden</h3>
                        </div>
                    
                    <form class="form-horizontal form-material" method="post" action="{{ url('/admin/edit/order/'.$order->id) }}">
                        @csrf
                        <div class="box-body">
                            <label>Nombre del Cliente</label>
                          <div class="input-group ">
                              
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control " placeholder="Nombre del Orden" name="name" 
                          type="text" value="{{ $order->users->name }}" readonly>
                            {{-- @if ($errors->has('name'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif --}}
                        </div>
                          
                          <div class="input-group">
                              <label for="method_shipping">Metodo de Envio</label>
                                  <select class="form-control" id="method_shipping" name="method_shipping">
                                    <option selected value="FEDEX">FEDEX</option>
                                    <option value="UPS">UPS</option>
                                    <option value="DHL">DHL</option>
                                  </select>
                          </div>
                          <div class="input-group">
                              <label for="status">Estado de la Orden</label>
                                  <select class="form-control" id="status" name="status">
                                    <option value="pending">Pendiente</option>
                                    <option value="in_process" selected>En Proceso</option>
                                    <option value="shipping">Enviado</option>
                                  </select>
                          </div>

                          <div class="input-group">
                              
                                <label>Direccion</label>
                                <textarea class="form-control" name="address" rows="3" placeholder="Una breve descripcion del producto">
                                    {{ $order->address }}
                                </textarea>
                                
                            </div>

                          <label>Total de la Orden</label>
                          <div class="input-group">
                              
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="text" name="total" value="{{ $order->total }}">
                            <span class="input-group-addon">.00</span>
                          </div>
                          
                          
                          <div class="form-group pull-right">
                              <br>
                              <div class="col-md-4">
                                  <input type="hidden" name="action" value="add">
                              
                                  <button type="submit" class="btn btn-flat btn-lg btn-primary"><i class="mdi mdi-plus"></i>Editar</button>
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

</div>

@endsection