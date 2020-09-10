@extends('layouts.admin')

@section('content')

<body onload="myFunction()">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Agendamiento de Citas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Citas</a></li>
                        <li class="breadcrumb-item active">Agendamiento de Citas</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Agendar</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                @csrf
                
                <div class="row">
                    <div class="col-sm-3">
                        <input type="button" id="btnAgregar" onclick="modalPaciente()" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-Paciente" value="Agregar" />
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de Pacientes</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped" >
                            <thead>
                                <tr>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Tratamient</th>
                                    <th>Comentario</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($agendas as $row)
                                <tr>
                                    <td>{{ $row->fecha }}</td>
                                    <td>{{ $row->hora }}</td>
                                    <td>{{ $row->tratamientoid }}</td>
                                    <td>{{ $row->comentario }}</td>
                                    <td><input type="button" class="btn btn-success" onclick="" value="Ver más.." />
                                    </td>
                                </tr>
                                @endforeach
                                </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</section>

    


   




        
</body>
@endsection