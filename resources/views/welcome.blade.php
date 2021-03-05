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
                    <button type="button" class="btn btn-sm btn-outline-secondary">Comment</button>
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

            @endforeach

@endsection
