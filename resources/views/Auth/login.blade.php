@extends('Layouts.template')
@section('title', ' - Login')

@section('content')
  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-sm-4 col-md-4 col-lg-4 mx-auto">
        <div id="login" class="card">
          <div class="card-header">
            <span>Iniciar sesion</span>
          </div>
          <div class="card-body">
            <form class="form-group" action="{{route('login')}}" method="post">
              @csrf
              <div class="form-grup">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}">
                {!! $errors->first('email', '<div class="alert alert-danger mt-2">:message</div>')!!}

                <label for="password">Contraseña</label>
                <input class="form-control" type="password" name="password" id="password">
                {!! $errors->first('password', '<div class="alert alert-danger mt-2">:message</div>')!!}
              </div>
              <button class="btn btn-primary btn-block mt-4" type="submit" name="button" id="button">Acceder</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
