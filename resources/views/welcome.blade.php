@extends('layouts.app')
@section('content')

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><strong>MyFilms</strong></h1>
          <p class="lead text-muted">Un lugar para poder ver cortos de animación tanto creados por el propio equipo de MyFilms como por otros creadores, si quieres
              subir tu proyecto simplemente tienes que ponerte en contacto con uno de nuestros Administradores o Editores y ellos te pedirán todo lo necesario para
              presentart tu proyecto
          </p>
        </div>
      </section>

      <div class="album py-5 bg-dark">
        <div class="container" >

          <div class="row">


            @foreach($videos as $video)


            <div class="col-md-4" >
              <div class="card mb-4 box-shadow" style="background-color:#232323; color:white;">

                <h2>{{$video->title}}</h2>
                 <div class="card-body">
                  <p class="card-text">{{$video->desc}}</p>
                  <p class="card-text"><strong>{{$video->cont}}</strong></p>
                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModalCenter{{$video->id}}">
                        Reviews</button>
                    <br><br>
                    <video class="card-img-top" src="{{asset('storage/'.$video->route)}}" style="width:100%" controls>
                    <br>
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>



            <div class="modal fade" id="exampleModalCenter{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalCenterTitle">Review</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form action="{{route('comment.store')}}" method="POST">
                        @csrf
                    <div class="form-group row">
                        <input style="opacity:0"id="videoid" name="videoid"  type="text" value="{{$video->id}}" class="form-control @error('comment') is-invalid @enderror" name="videoid" readonly>

                        <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('New Review') }}</label>

                        <div class="col-md-6">
                            <input id="comment" name="comment" required type="textarea" class="form-control @error('comment') is-invalid @enderror" name="comment" autocomplete="new-comment">

                            @error('comment')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="comment" class="col-md-4 col-form-label text-md-right">{{ __('New Puntuacion') }}</label>

                        <div class="col-md-6">
                            <input id="puntuacion" required  min="1" max="5" step="1"name="puntuacion"  type="range" class="form-control @error('puntuacion') is-invalid @enderror" name="puntuacion">
                                <div class="ticks" style="  display: flex;
                                justify-content: space-around;">
                                    <!-- You could generate the ticks based on your min, max & step values. -->
                                    <span class="tick">1</span>
                                    <span class="tick">2</span>
                                    <span class="tick">3</span>
                                    <span class="tick">4</span>
                                    <span class="tick">5</span>
                                  </div>
                            @error('puntuacion')

                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save Review</button>
                    </div>
                </form>

                @foreach($comments as $comment)
                @if($comment->video == $video->id)
                  <div style="margin-top:30px;display:flex;justify-content:space-around">
                    <p>{{$comment->user}}</p>
                   <p>{{$comment->comment}}</p>
                   <p><strong>{{$comment->puntuacion}}/5</strong></p>
                  </div>
                  @endif
                  @endforeach
                  </div>

                </div>

              </div>
              @endforeach
            </div>
             </div>
        </div>
    </div>




@endsection
