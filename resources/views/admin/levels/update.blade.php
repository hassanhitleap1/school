@extends('admin.layouts.admin-layouts')
@section('title', 'create level')
@section('content')
    <section class="content-header">
        <h1> add level<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
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
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form levels</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('admin/levels/'.$level->id.'/edit')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name_en">Name in English</label>
                                <input type="text" class="form-control" id="name_en" placeholder="Enter Name English" name="name_en" value="{{ old('name_en') }}">
                            </div>
                            <div class="form-group">
                                <label for="name_ar">Name in Arabic</label>
                                <input type="text" class="form-control" id="name_ar" placeholder="Name in Arabic" name="name_ar" value="{{ old('name_ar') }}">
                            </div>
                            <div class="form-group">
                                <label for="name_ar">Order Level</label>
                                <input type="text" class="form-control" id="order" placeholder="Order Level" name="order" value="{{ old('order') }}">
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