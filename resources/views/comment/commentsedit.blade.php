@extends('home')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">Reviews</h1>
        <br><br>
        <table class="table">
            <thead>
                <tr>
                    <th>Review</th>
                    <th>Puntuación</th>
                    <th>User</th>
                    <th></th>
                </tr>
            @foreach($comment as $comment)
                <tr>
                    <td >{{$comment->comment}}</td>
                    <td >{{$comment->puntuacion}} </td>
                    <td >{{$comment->user}}</td>
                    <td>
                        <a class="btn btn-danger"  href="{{route('comment.destroy',$comment->id)}}">Delete</a>
                    </td>

                </tr>
            @endforeach

            </thead>
        </table>
    </div>

    @endsection
