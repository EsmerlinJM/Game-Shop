@extends('admin.layouts.master')

@section('title')
    Game-Shop | Editar Usuario
@endsection

@section('content')

@section('page')
    Editar Usuario
@endsection

@section('breadcrumb')
<a href="{{ route('users-panel') }}">Panel Usuarios</a> 
@endsection

<div class="row">
        <div class="col-md-6">
    
                <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Editar Usuario</h3>
                        </div>
                    
                    <form class="form-horizontal form-material" method="post" action="{{ url('admin/edit/user/'.$user->id) }}">
                        @csrf
                        <div class="box-body">
                            <label>Nombre del Usuario</label>
                          <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                              
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" placeholder="Nombre del Usuario" name="name" 
                          type="text" value="{{ $user->name }}">
                            @if ($errors->has('name'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
            
                          <label>Email del Usuario</label>
                          <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                              
                            <span class="input-group-addon">@</span>
                            <input class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" placeholder="Email del Usuario" name="email" 
                          type="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))
                                <span class="help-block" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                          
                          <div class="input-group">
                              <label for="verified">Verificado</label>
                                  <select class="form-control" id="verified" name="verified">
                                    <option selected value="1">Si</option>
                                    <option value="0">No</option>
                                  </select>
                          </div>
                          <div class="input-group">
                              <label for="role">Rol del Usuario</label>
                                  <select class="form-control" id="role" name="role">
                                    <option value="admin">Administrador</option>
                                    <option value="user" selected>Usuario/Cliente</option>
                                  </select>
                          </div>
                          
                          
                          <div class="form-group pull-right">
                              <div class="col-md-4">
                                  <input type="hidden" name="action" value="add">
                              
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

</div>

@endsection