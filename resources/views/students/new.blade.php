@extends('layout.form')

@section('content-title')
	Nuevo Federado
@endsection

@section('content-description')
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam delectus necessitatibus consequuntur sit explicabo odit ad!
@endsection

@section('form-action')
	action = "{{ route('federados.nuevo') }}"
@endsection

@section('form-content')
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">
	      		Nombre
	      </label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Nombre">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Apellidos</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Apellidos">
	      </div>
	    </div>
	  </div>
	</div><div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
	      <div class="col-sm-9">
	        <input class="form-control" placeholder="dd/mm/yyyy">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        <input class="form-control" type="text" placeholder="Licencia">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Inicio de Licencia</label>
	      <div class="col-sm-9">
	        <input class="form-control" placeholder="dd/mm/yyyy">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fin de Licencia</label>
	      <div class="col-sm-9">
	        <input class="form-control" placeholder="dd/mm/yyyy">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Club</label>
	      <div class="col-sm-9">
	        <input class="form-control" type="text" placeholder="Club">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Maestro</label>
	      <div class="col-sm-9">
	        <select class="form-control">
	          <option>Eligue uno</option>
	          <option>Maestro1</option>
	          <option>Maestro2</option>
	          <option>Maestro4</option>
	          <option>Maestro5</option>
	        </select>
	      </div>
	    </div>
	  </div>
	</div>
	<p class="card-description">
	  Dirección
	</p>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Calle / Av</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Calle">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Provincia</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Provincia">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Cuidad</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Cuidad">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Código Postal</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="C.P">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
          <label class="col-sm-3 col-form-label">Foto de Perfil</label>
          <input type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-sm-9">
            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Subir imagen">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Subir</button>
            </span>
          </div>
        </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <button type="submit" class="btn btn-danger mr-2">Enviar</button>
	      <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
	    </div>
	  </div>
	</div>
@endsection