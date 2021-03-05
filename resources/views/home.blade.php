@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(Auth::user()->hasRole('admin'))
                        <div><strong>Acces com administrador<strong></div>
                    @elseif(Auth::user()->hasRole('editor'))
                        <div><strong>Acces com editor<strong></div>
                    @else
                        <div><strong>Acces usuari<strong></div>
                    @endif
                    You are logged in!
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}

                </div>
                <a class="btn btn-primary" style="margin:10px"href="{{url('/')}}">Go Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
