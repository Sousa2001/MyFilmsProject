@extends('home')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Video edit</h1>
        <form action="{{route('video.update',$video)}}" method="POST">
            @csrf
            @method('PUT')
            Title
            <br/>
            <input type="text" name="title" value="{{$video->title}}" class="form form-control">
            <br>

            Description
            <br/>
            <input type="text" name="desc" value="{{$video->desc}}" class="form form-control">
            <br>

            Content
            <br/>
            <select multiple class="form form-control" name="cont" value="{{$video->cont}}">
                <option>Acción</option>
                <option>Aventura</option>
                <option>Comedia</option>
                <option>Ciencia Ficción</option>
                <option>Crimen</option>
                <option>Drama</option>
                <option>Guerra</option>
                <option>Romance</option>
                <option>Terror</option>
              </select>
              <br>

            Route
            <br/>
            <input type="text" name="route" value="{{$video->route}}" class="form form-control">
            <br>
            Owner
            <br/>
            <input class="list-group " list="user" name="user" value="{{$video->user}}">
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    <br/>
    </div>

    @endsection
