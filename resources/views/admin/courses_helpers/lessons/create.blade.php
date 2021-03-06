@extends('admin.layouts.admin-layouts')
@section('title', 'create units for courses')
@section('content')
    <section class="content-header">
        <h1> add units for courses<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/admin/courses_helpers')}}">My Courses</a></li>
            <li ><a href="{{url('/admin/courses_helpers/'.$idCourse.'/units')}}">Units </a></li>
            <li ><a href="{{url('/admin/courses_helpers/'.$idCourse.'/units/'.$idUnit.'/lessons')}}">Lessons </a></li>
            <li class="active">create lesson Unit Course</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                    <a href="{{url('/admin/courses_helpers/'.$idCourse.'/units/'.$idUnit.'/lessons')}}" class="btn btn-primary btn-lg" >back </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                            {{ $error }}.
                    </div>
                    @endforeach
                @endif
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form lesson</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/admin/courses_helpers/'.$idCourse.'/units/'.$idUnit.'/lessons')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="Description" name="description" value="{{ old('description') }}">
                            </div>
                            <div class="form-group">
                                <label for="description">content</label>
                                <input type="text" class="form-control" id="content" placeholder="content" name="content" value="{{ old('content') }}">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection