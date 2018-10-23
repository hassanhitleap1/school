@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($coures as $coure)
            <div class="col-md-3">
                <h5>{{$coure->name}}</h5>
                <p>{{$coure->description}}</p>
                <h5>{{$coure->teacher->name}}</h5>
            </div>
        @endforeach

    </div>
</div>
@endsection
