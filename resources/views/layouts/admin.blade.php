<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DentalTER | Inicio</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
 

    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}"> -->
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/dist/css/adminlte.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('/css/procesando.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-cyan">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="{{ url('/home') }}" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="background-color: #343a40;" class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ url('/home') }}" class="brand-link brand-link navbar-cyan">
                <img src="{{ asset('/img/logo3.png') }}" alt="DentalTER Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">DentalTER</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"> {{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">MENÚ</li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Paciente
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('/paciente') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maestro de Pacientes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/historial') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Historiales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/mihistorial') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mi Perfil</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/contrasena') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Resetear Contraseña</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Citas
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('agenda.index')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agendar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/administrarCitas') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Administrar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Ortodoncia
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('simulador')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simulador</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Mantenimiento
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{route('mantenimiento.colores')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Colores</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @yield('content')


            <div class="cartprocess" style="display: none;">
                <div class="inbox">
                    <div>
                        <img src="{{ asset('/img/procesando.gif')}}" style="max-width:50%" />
                    </div>
                </div>
            </div>

            <div class="modal fade" id="modal-Confirmacion">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>One fine body&hellip;</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2020 <a href="http://adminlte.io">JP Soluctions</a>.</strong> Proyecto Reservado Por Joseph Plúas
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="{{ asset('/js/validaciones.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- DataTables -->
 
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
       <!--
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>  -->
    <!-- AdminLTE App -->
    

    <script src="{{ asset('/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/dist/js/demo.js') }}"></script>

    <!-- page script -->
<script>
    $(document).ready( function () {
    $('#pacientes').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {{route('paciente.filtro')}}
    });
} );
</script>
    
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>


</body>

</html>