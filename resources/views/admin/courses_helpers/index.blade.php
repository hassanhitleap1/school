@extends('admin.layouts.admin-layouts')
@section('title', 'courses helpers')
@section('content')

    <section class="content-header">
        <h1>
            Data courses helpers
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/courses_helpers/create')}}" class="btn btn-primary btn-lg"  >Create </a>
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
                                <th>Category name</th>
                                <th>level name </th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                             @foreach($coursesHelpers as $coursesHelper)
                                <tr>
                                    <td>{{$coursesHelper->category->name_en}}</td>
                                    <td>{{$coursesHelper->level->name_en}}</td>
                                    <td>
                                        
                                        <form id="trash-form" action="{{url('/admin/courses_helpers/'.$coursesHelper->id)}}" method="POST">
                                            <a><i class="fa fa-fw fa-trash"  onclick="event.preventDefault();
                                                     document.getElementById('trash-form').submit();"></i>Delete</a>
                                                     <input type="hidden" name="_method" value="DELETE" />
                                                     @csrf
                                        </form>
                                        <a href="{{url('/admin/courses_helpers/'.$coursesHelper->id.'/edit')}}"><i class="fa fa-fw fa-pencil"></i>Edit</a>
                                        <a href="{{url('/admin/courses_helpers/'.$coursesHelper->id.'/units')}}"><i class="fa fa-fw  fa-book"></i>Units</a>

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