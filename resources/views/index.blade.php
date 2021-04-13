
@extends('app')

@section('content')
    <h4 class="text-center">List of posts by authors</h4>

    <div class="card card-default">
        <div class="card-header">Posts</div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($uniqueUserIds as $uniqueUserId)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="col-md-7">
                                Author - {{$uniqueUserId['userId']}}
                            </div>
                            <span class="badge badge-primary badge-pill">{{$count[$uniqueUserId['userId']]}}posts</span>
                            <div class="col-md-2">
                                <a href="{{ route('post.show', $uniqueUserId['userId']) }}"
                                   class="btn btn-sm float-right btn-success">See more</a>
                            </div>
                        </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection