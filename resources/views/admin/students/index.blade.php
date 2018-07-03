<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.admin')

@section('title', 'Home ')



@section('content')

    <link rel="stylesheet" href="{{ asset('AdminTheme/plugins/datatables/dataTables.bootstrap.css')}}">

    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
       

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>name </th>
                                <th>email</th>
                                <th>block</th>
                                <th>create at</th>
                                <th> ips</th>
                                <th>action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->block}}</td>
                                <td>{{$student->created_at}}</td>
                                <td>ips</td>
                                <td>
                                    <span class="fa fa-minus-circle">block<span>
                                </td>

                            </tr>
                            @endforeach
                        
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>



<!-- jQuery 2.2.3 -->
<script src="{{asset('AdminTheme/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('AdminTheme/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('AdminTheme/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminTheme/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('AdminTheme/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('AdminTheme/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminTheme/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminTheme/dist/js/demo.js')}}"></script>
<!-- page script -->
<!-- <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script> -->
@endsection