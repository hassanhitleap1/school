@extends('teacher.layouts.teacher')
@section('title', 'create courses')
@section('content')
    <section class="content-header">
        <h1> add courses<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/teacher')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/teacher/courses')}}">My Courses</a></li>
            <li class="active">Create Course</li>
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
                    <a href="{{url('/teacher/courses')}}" class="btn btn-primary btn-lg" >back </a>
            </div>
         </div>
        <div class="row">
            <div class="col-md-offset-2 col-md-9">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">form courses</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/teacher/courses/')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="material_id">material</label>
                                <select class="form-control" id="material_id" name="material_id">
                                    <option selected disabled>please select</option>
                                    @foreach ($materials as $material)
                                        <option value="{{$material->id}}" >{{$material->name_en}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="level_id">level</label>
                                <select class="form-control" id="level_id" name="level_id">
                                    <option selected disabled>please select</option>
                                    @foreach ($levels as $level)
                                        <option value="{{$level->id}}" >{{$level->name_en}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" placeholder="Place Description here"  name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Price" name="price" value="{{ old('price') }}">
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-block btn-primary" id="albomImge">
                                    <li class="fa fa-file-image-o fa-2x"> select image form albom</li>
                                </a>
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
              @include('teacher.courses.model')
            <script>
                $(function() {
            
                        $("#albomImge").click(function (e) { 
                            e.preventDefault();
                            $( ".modal-body" ).load( "load-albom" , function() {
                                $('#imagemodal').modal('show');   
                            });
                        });   
                });
             </script>
    </section>
@endsection