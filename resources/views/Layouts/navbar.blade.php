<nav class="navbar navbar-expand-lg navbar-light bg-dark border-purple">
  <a class="navbar-brand"><img class="logo" src="https://www.vozdigital.cl/wp-content/uploads/2016/07/logo232.png" alt="Vozdigital"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Secciones -->
    </ul>
    @if(auth()->user() != null)
      @php
        $nombreCompleto = '';
        $nombreCompleto = auth()->user()->nom_usuario.' '.auth()->user()->apellido_paterno.' '.auth()->user()->apellido_materno;
      @endphp
      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle color-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{$nombreCompleto}}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <form class="form-inline my-2 my-lg-0" action="{{route('logout')}}" method="post">
            @csrf
            <button class="dropdown-item" type="submit" name="cerrarSesion">Cerrar sesion</button>
          </form>
        </div>
      </div>
    @else
      <form class="form-inline my-2 my-lg-0" action="index.html" method="post">
        <a class="btn btn-primary btn-sm my-2 my-sm-0 color-purple" href="{{route('login')}}">Iniciar sesion</a>
      </form>
      <form class="form-inline my-2 my-lg-0" action="index.html" method="post">
        <a class="btn btn-primary btn-sm my-2 my-sm-0 ml-3 color-purple" href="#">Registrarse</a>
      </form>
    @endif
  </div>
</nav>
