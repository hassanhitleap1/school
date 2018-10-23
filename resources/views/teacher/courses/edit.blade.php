@extends('teacher.layouts.teacher')
@section('title', 'edit material')
@section('content')
    <section class="content-header">
        <h1> add material<small>advanced tables</small></h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/teacher')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/teacher/courses')}}">My Courses</a></li>
            <li class="active">Edit Course {{$course->name}}</li>
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
                        <h3 class="box-title">form materials</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{url('/teacher/courses/'.$course->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put" />
                        <div class="box-body">
                            <div class="form-group">
                                <label for="description"></label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{$course->name}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" placeholder="description" name="description" value="{{$course->description}}">
                            </div>
                            <div class="form-group">
                                @if (!$course->cover_path == null)
                                <div class="container">
                                        <img src="{{asset($course->cover_path)}}" alt="Snow">
                                        <a class="btn  btn-lg" href="{{url('/teacher/courses/'.$course->id.'/delete-cover')}}"><li class="fa fa-fw fa-trash"></li>delete</a>
                                </div>
                                @endif

                                    <label for="cover">cover</label>
                                    <input id="cover" type="file" class="form-control" name="cover"  value="{{ old('cover') }}">
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


    <style>
    .container {
  position: relative;
  width: 50%;
}

/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn:hover {
  background-color: black;
}
    </style>
@endsection