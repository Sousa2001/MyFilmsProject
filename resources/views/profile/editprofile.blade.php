@extends('home')

@section('content')
    <div class="col-lg-12">

        <h1 class="my-4">{{$user->name}} Profile</h1>
        <form action="{{route('profile.update',$user)}}" method="POST">
            @csrf
            @method('PUT')
            Name
            <br/>
            <input type="text" name="name" value="{{$user->name}}" class="form form-control">
            <br>

            Email
            <br/>
            <input type="text" name="email" value="{{$user->email}}" class="form form-control">
            <br>
            Rol
            <input type="text" name="password" value="{{$user->rol}}" readonly class="form form-control">
            <br>
            <br/>
            <input type="submit" class="btn btn-success" value="Save">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Change Password</button>
            <a class="btn btn-danger" href="{{route('profile.destroy',$user->name)}}">Delete User</a>

            <br/>
            <br/>


        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Change Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" name="password"  type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>

              </div>
            </div>
          </div>
    <br/>
    </div>
</form>
    @endsection
