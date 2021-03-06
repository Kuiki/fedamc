@extends('layout.form')

@section('content-title')
	Ver Usuario
@endsection

@section('content-description')

@endsection

@section('form-action')
	
@endsection

@section('form-content')
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">
	      		Nombre
	      </label>
	      <div class="col-sm-9">
	        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ $user->name }}" disabled>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Apellidos</label>
	      <div class="col-sm-9">
	        <input name="lastname" type="text" class="form-control" placeholder="Apellidos" value="{{ $user->lastname }}" disabled>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" class="form-control" placeholder="Correo Electrónico" value="{{ $user->email }}" disabled>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        @if ($user->teacher)
	      		<input name="license" class="form-control" type="text" placeholder="Licencia" value="{{ $user->teacher->license }}" disabled>
	      	@elseif($user->studend)
	      		<input name="license" class="form-control" type="text" placeholder="Licencia" value="{{ $user->studend->license }}" disabled>
	      	@else
	      		<input name="license" class="form-control" type="text" placeholder="Licencia" value="" disabled>
	      	@endif
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
          <label class="col-sm-3 col-form-label">Foto de Perfil</label>
          <div class="input-group col-sm-9">
            <input type="file" name="profilePicture" class="form-control file-upload-info" placeholder="Subir imagen" accept="image/png, image/jpeg, image/gif" disabled>
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-secondary" type="button">Subir</button>
            </span>
          </div>
          <div class="col-sm-3 col-form-label"></div>
          <div class="col-sm-1 col-form-label">
            <img class="img-md rounded-circle mb-4 mb-md-0" src="{{ Storage::url($user->profilePicture) }}" alt="profile image">
          </div>
        </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña" value="{{ $user->password }}" disabled>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Estado</label>
          <div class="col-sm-9">
            <select name="active" class="form-control" disabled>
              <option value="1" {{ $user->active == '1' ? 'selected' : ''}}>Activo</option>
              <option value="0" {{ $user->active == '0' ? 'selected' : ''}}>Inactivo</option>
            </select>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <a class="btn btn-danger mr-2" href="{{ route('usuarios.editar', ['user' => $user->id ])}}">Editar</button>
	      <a href="{{ url()->previous() }}" class="btn btn-light">Atrás</a>
	    </div>
	  </div>
	</div>
@endsection