@extends('app')

@section('content')
<h3 class="text-center">Posts of Author {{ $id }}</h3>
    <div class="card card-default">
        <!--<div class="card-header"><h4>Posts</h4></div>-->
        <div class="card-body">
            <ul class="list-group">
                @foreach($collections as $collection)
                    <li class="list-group-item">
                        <div class="card-header">
                            <i>Title : </i><strong>"{{$collection['title']}}"</strong>
                        </div>
                        <!--<div class="card-header"><h5 class="text-center">{{--$collection['title']--}}</h5></div>-->
                        <div class="card-body">{{$collection['body']}}</div>
                        <!--<strong><i>Title :</i></strong> {{--$collection['title']--}}-->
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
@endsection