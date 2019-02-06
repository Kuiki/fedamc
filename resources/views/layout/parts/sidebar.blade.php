<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ asset('fedamc/images/faces/face1.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <div>
              <small class="designation text-muted">Administrador</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block">Nuevo Usuario
          <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/intranet') }}">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">ESCRITORIO</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#maestros" aria-expanded="false" aria-controls="maestros">
        <i class="menu-icon mdi mdi-account-star"></i>
        <span class="menu-title">MAESTROS</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="maestros">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('maestros') }}">Todos los maestros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('maestros.nuevo') }}">Añadir nuevo</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#federados" aria-expanded="false" aria-controls="federados">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">FEDERADOS</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="federados">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('federados') }}"> Todos los federados </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('federados.nuevo') }}"> Añadir Nuevo </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#configuracion" aria-expanded="false" aria-controls="configuracion">
        <i class="menu-icon mdi mdi-account"></i>
        <span class="menu-title">MI CUENTA</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="configuracion">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#"> Ver Perfil </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Cambiar contranseña </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Cerrar Sessión </a>
          </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>