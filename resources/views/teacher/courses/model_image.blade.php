<div class="row">
    @foreach ($covers as $cover)
        <div class="col-md-3">
            <img src="{{asset($cover->cover_path_help)}}" style="width: 200px; height: 200px"/>
        </div>
    @endforeach
</div>
