@extends('layouts.admin')

@section('content')

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Administrar Citas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Citas</a></li>
          <li class="breadcrumb-item active">Administrar Citas</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">Filtros de Búsquedas</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="card-body">

      <div class="row">
        <div class="col-sm-3">
          <input type="button" id="btnAgregar" class="btn btn-block btn-success" data-toggle="modal" data-target="#modal-lg" value="Agregar" />
        </div>
        <div class="col-sm-3">
          <input type="button" id="btnBuscar" class="btn btn-block btn-primary" value="Buscar" />
        </div>
      </div>
    </div>
  </div>
</div>

@endsection