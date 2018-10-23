@extends('admin.layouts.admin-layouts')
@section('title', 'materials')
@section('content')

    <section class="content-header">
        <h1>
            Data materials
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/admin/courses_helpers')}}">Helper Courses</a></li>
            <li class="active">Units</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/courses_helpers')}}" class="btn btn-primary btn-lg" >back </a>
                <a href="{{url('/admin/courses_helpers/'.$id.'/units/create')}}" class="btn btn-primary btn-lg" >Create </a>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($units as $unit)
                                    <tr>
                                        <td>{{$unit->name}}</td>
                                        <td>{{$unit->description}}</td>
                                        <td>
                                            <form id="trash-form" action="{{url('/admin/courses_helpers/'.$id.'/units/'.$unit->id)}}" method="POST">
                                                <a><i class="fa fa-fw fa-trash"  onclick="event.preventDefault();document.getElementById('trash-form').submit();"></i>Delete
                                                </a>
                                                <input type="hidden" name="_method" value="DELETE" />
                                                    @csrf
                                            </form>
                                            <a href="{{url('/admin/courses_helpers/'.$id.'/units/'.$unit->id.'/edit')}}"><i class="fa fa-fw fa-pencil"></i>Edit</a>
                                            <a href="{{url('/admin/courses_helpers/'.$id.'/units/'.$unit->id.'/lessons')}}"><i class="fa fa-fw  fa-book"></i>Lessons</a>
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