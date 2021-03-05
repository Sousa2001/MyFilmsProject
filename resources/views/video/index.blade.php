@extends('home')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Video</h1>
       <a class="btn btn-success" href="{{route('newvideo')}}">New</a>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Contenido</th>
                    <th>Descripción</th>
                    <th>Route</th>
                    <th></th>
                </tr>
            @foreach($video as $video)
                <tr>
                    <td style="padding-top:100px;">{{$video->title}}</td>
                    <td style="padding-top:100px;">{{$video->cont}} </td>
                    <td style="padding-top:100px;">{{$video->desc}}</td>
                    <td><video src="{{asset('storage/'.$video->route)}}" width="200px" height="200px" controls></td>
                    <td style="padding-top:100px;"><a class="btn btn-primary" href="{{route('video.edit',$video->id)}}">Edit</a>
                        <a class="btn btn-danger"  href="{{route('video.destroy',$video->id)}}">Delete</a>
                    </td>

                </tr>
            @endforeach

            </thead>
        </table>
    </div>

    @endsection
