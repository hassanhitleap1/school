@extends('admin.layouts.admin-layouts')
@section('title', 'levels')
@section('content')

    <section class="content-header">
        <h1>
            Data levels
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
            <div class="col-md-12">
                <a href="{{asset('/admin/levels/create')}}" class="btn btn-primary btn-lg" id="create_level" >Create </a>
            </div>
        </div>
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
                                <th>Name in Arabic</th>
                                <th>Name in English</th>
                                <th>order</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                             @foreach($levels as $level)
                                <tr>
                                    <td>{{$level->name_en}}</td>
                                    <td>{{$level->name_ar}}</td>
                                    <td>{{$level->order}}</td>
                                    <td>
                                        <a href=""> <i class="fa fa-fw fa-trash"></i> Delete</a>
                                        <a href=""><i class="fa fa-fw fa-pencil"></i> Update</a>

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
@endsection