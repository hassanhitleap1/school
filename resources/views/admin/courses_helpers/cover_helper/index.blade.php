@extends('admin.layouts.admin-layouts')
@section('title', 'Cover Courses Helper')
@section('content')

    <section class="content-header">
        <h1>
                Cover Courses Helper
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Cover Courses Helper</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/admin/cover_helpers/create')}}" class="btn btn-primary btn-lg"  >Create </a>
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
                                <th>Material Name</th>
                                <th>Cover </th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tbody>
                             @foreach($coversHelper as $coverHelper)
                                <tr>
                                    <td>{{$coverHelper->material->name_en}}</td>
                                    <td><img src="{{asset($coverHelper->cover_path_help)}}" style="with:200px; height: 200px;" /></td>
                                    <td>
                                            <a><i class="fa fa-fw fa-trash"  onclick="event.preventDefault();document.getElementById('trash-form-cover').submit();"></i>Delete
                                            </a>
                                         <form id="trash-form-cover" action="{{route('cover_helpers.destroy',['cover_helper'=>$coverHelper->id])}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />   
                                        </form>
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