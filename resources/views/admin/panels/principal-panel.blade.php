@extends('admin.layouts.master')

@section('title')
    Game-Shop | Admin Panel
@endsection

@section('content')

@section('page')
    Panel Principal
@endsection

@section('breadcrumb')
    Panel Principal
@endsection

<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <h3>{{ count($orders) }}</h3>

              <p>Ordenes</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
        <a href="{{ route('orders-panel') }}" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{ count($users) }}</h3>

              <p>Usuarios Registrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
        <a href="{{ route('users-panel') }}" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{ count($products) }}</h3>

              <p>Productos Almacenados</p>
            </div>
            <div class="icon">
              <i class="ion ion-cube"></i>
            </div>
        <a href="{{ route('products-panel') }}" class="small-box-footer">Ver más <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
@endsection