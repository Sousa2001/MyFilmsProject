@extends('home')

@section('content')
    <div class="col-lg-12">


        @foreach($videos as $video)
        <div class="container" style="background-color:black">
            <h2>{{$video->title}}</h2>
            <div class="card" style="width:400px">
                <div class="card-body">
                <h4 class="card-title">{{$video->cont}}</h4>
                <p class="card-text">{{$video->desc}}</p>
                <video class="card-img-top" src="{{asset('storage/'.$video->route)}}" style="width:100%" controls>
              </div>
            </div>
            <br>
    @endforeach
    </div>

    @endsection
