@extends('home')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">New Video</h1>
        <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            Title
        <br/>
            <input type="text" name="title" value="" class="form form-control" required>
            <br>
            Description
            <br/>
            <input type="text" name="desc" value="" class="form form-control" required>
            <br>
            Categoría
            <br/>
            <select multiple class="form form-control" name="cont">
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
            Video
            <br/>
            <input type="file" name="route" required>

            <br/>
            <br/>
            <input type="submit" class="btn btn-primary" value="Save">
            <br/>
            <br/>
        </form>
    </div>

    @endsection
