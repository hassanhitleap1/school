@extends('admin.layouts.admin-layouts')
@section('title', 'edit material')
@section('content')
    <section class="content-header">
        <h1> add material<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/admin/materials')}}">Materials</a></li>
            <li class="active">Edit Material  {{$material->name_en}}</li>
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
                    <a href="{{url('/admin/materials')}}" class="btn btn-primary btn-lg" >back </a>
            </div>
         </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form materials</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/materials/'.$material->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name_en">Name in English</label>
                                <input type="text" class="form-control" id="name_en" placeholder="Enter Name English" name="name_en" value="{{$material->name_en}}">
                            </div>
                            <div class="form-group">
                                <label for="name_ar">Name in Arabic</label>
                                <input type="text" class="form-control" id="name_ar" placeholder="Name in Arabic" name="name_ar" value="{{$material->name_ar}}">
                            </div>
                            <div class="form-group">
                                    <label for="level_id">level</label>
                                    <select class="form-control" id="level_id" name="level_id">
                                        @foreach ($levels as $level)
                                            @if( $material->level_id==$level->id)
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
                            <input name="_method" type="hidden" value="PUT">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection