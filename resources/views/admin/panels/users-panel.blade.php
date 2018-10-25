@extends('admin.layouts.master')

@section('title')
    Game-Shop | Panel Usuario
@endsection

@section('content')

@section('page')
    Panel Usuarios
@endsection

@section('breadcrumb')
    Panel Usuarios
@endsection

@if(session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-check"></i> {{ session('success') }}</h4>
</div>
@endif

<div class="col-md-4">
        <a href="{{ route('add-user') }}" class="btn btn-primary btn-lg btn-flat btn-new" title="Nuevo Producto">
                  <i class="fa fa-plus"></i> Nuevo Usuario
              </a>
        </div>
<div class="col-xs-12">
<div class="box">
  <div class="box-header">
    <h3 class="box-title">Tabla de Usuarios</h3>
    

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
        <th>Email</th>
        <th>Tipo de Usuario</th>
        <th>Confimacion</th>
        <th>Creado</th>
        <th>Opciones</th>
      </tr>
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
        <td>
            @if($user->role == 'admin')
            <span class="label label-success">Admin</span>
            @else
            <span class="label label-info">Cliente</span>
            @endif
        </td>
        <td>
            @if($user->verified == 1)
            <span class="label label-success">Confirmado</span>
            @else
            <span class="label label-danger">No Confirmado</span>
            @endif

        </td>
        <td>
            {{ date('d/m/Y h:i:s A', strtotime($user->created_at)) }}
        </td>
        <td>
        <a href="{{ url('admin/edit/user/'.$user->id) }}" class="btn btn-warning btn-xs btn-flat"
           name="editar" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></a>

        <a
           
           href="{{ url('admin/delete/user/'.$user->id) }}" class="btn btn-danger btn-xs btn-flat" name="borrar_entrada"  data-placement="top" title="¿Quieres Eliminar Este Usuario?"
                         data-toggle="confirmation"
                         data-btn-ok-label=""
                         data-btn-ok-icon="fa fa-check"
                         data-btn-ok-class="btn btn-sm btn-success"
                         data-btn-cancel-label=""
                         data-btn-cancel-icon="fa fa-ban"
                         data-btn-cancel-class="btn btn-sm btn-danger"
                         data-singleton="true"
                          ><i class="fa fa-trash" aria-hidden="true"></i></a>   
        {{-- <a href="#" class="btn btn-danger btn-xs btn-flat" data-toggle="modal" data-target="#confirm-delete"
             ><i class="fa fa-trash" aria-hidden="true"></i></a> --}}
             
        </td>
        
      </tr>
      @endforeach
    </tbody>
    </table>
    <div class="text-center">
            {{ $users->links() }}
   </div>
    
  </div>
  <!-- /.box-body -->
</div>
      
<!-- /.box -->
</div>

@endsection