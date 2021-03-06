@extends('admin.layouts.admin-layouts')
@section('title', 'create coursesHelpers')
@section('content')
    <section class="content-header">
        <h1> add coursesHelpers<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/admin/courses_helpers')}}">Helper Coureses</a></li>
            <li class="active">Edit Course</li>
        </ol>
    </section>
    <section class="content">
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
            <div class="col-md-12">
                    <a href="{{url('/admin/courses_helpers')}}" class="btn btn-primary btn-lg" >back </a>
            </div>
         </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form coursesHelpers</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/admin/courses_helpers/'.$coursesHelper->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            <div class="form-group">
                                <label for="category_id">category</label>
                                <select class="form-control" id="category_id" name="category_id">
                                    @foreach ($categories as $category)
                                        @if( $coursesHelper->category_id==$category->id)
                                         <option value="{{$category->id}}" selected>{{$category->name_en}}</option>
                                        @else
                                            <option value="{{$category->id}}" >{{$category->name_en}}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="level_id">level</label>
                                    <select class="form-control" id="level_id" name="level_id">
                                        @foreach ($levels as $level)
                                            @if( $coursesHelper->level_id==$category->id)
                                                <option value="{{$level->id}}" selected>{{$level->name_en}}</option>
                                             @else
                                                <option value="{{$level->id}}" >{{$level->name_en}}</option>
                                             @endif
                                        @endforeach
                                        
                                    </select>
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