@extends('admin.layouts.admin-layouts')
@section('title', 'Create Cover Courses Helper')
@section('content')
    <section class="content-header">
        <h1> Cover Courses Helper coursesHelpers<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/admin/cover_helpers')}}">Cover Courses Helper</a></li>
            <li class="active">Create Cover Courses Helper</li>
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
                    <a href="{{url('/admin/cover_helpers')}}" class="btn btn-primary btn-lg" >back </a>
            </div>
         </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form Cover Courses Helper</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/admin/cover_helpers')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="material_id">materials</label>
                                <select class="form-control" id="material_id" name="material_id">
                                    <option selected disabled > please select</option>
                                    @foreach ($materials as $material)
                                        <option value="{{$material->id}}" >{{$material->name_en}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                    <label for="cover">cover</label>
                                    <input id="cover" type="file" class="form-control" name="cover"  value="{{ old('cover') }}">
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