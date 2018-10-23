@extends('teacher.layouts.teacher')
@section('title', 'lessons')
@section('content')

    <section class="content-header">
        <h1>
            Data lessons
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/teacher')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li ><a href="{{url('/teacher/courses')}}">My Courses</a></li>
            <li class="active">Units Course</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
<<<<<<< HEAD
             <a href="{{url('/teacher/courses/'.$idCourse.'/units')}}" class="btn btn-primary btn-lg" >back </a>
=======
                <a href="{{url('/teacher/courses/'.$idCourse.'/units')}}" class="btn btn-primary btn-lg" >Back </a>
>>>>>>> f99ed43b134a7a927ad793f261872b72b0589a72
                <a href="{{url('/teacher/courses/'.$idCourse.'/units/'.$idUnit.'/lessons/create')}}" class="btn btn-primary btn-lg" >Create </a>
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
                              @foreach($lessons as $lesson)
                                <tr>
                                    <td>{{$lesson->name}}</td>
                                    <td>{{$lesson->description}}</td>
                                    <td>{{$lesson->content}}</td>
                                    <td>
                                        <form id="trash-form" action="{{url('/teacher/courses/'.$idCourse.'/units/'.$idUnit.'/lessons/'.$lesson->id)}}" method="POST">
                                            <a><i class="fa fa-fw fa-trash"  onclick="event.preventDefault();document.getElementById('trash-form').submit();"></i>Delete
                                            </a>
                                            <input type="hidden" name="_method" value="DELETE" />
                                                @csrf
                                        </form>
                                        <a href="{{url('/teacher/courses/'.$idCourse.'/units/'.$idUnit.'/lessons/'.$lesson->id.'/edit')}}"><i class="fa fa-fw fa-pencil"></i>Edit</a>
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