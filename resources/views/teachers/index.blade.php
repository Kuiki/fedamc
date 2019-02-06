@extends('layout.table')

@section('content-title')
	Lista de Maestros
@endsection

@section('content-description')
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
@endsection

@section('form-button')
	href="{{ route('maestros.nuevo') }}"
@endsection

@section('table-head')
	
	<th>Usuario</th>
	<th>Nombre</th>
	<th>Estado</th>
	<th>Licencia</th>
	<th>Acciones</th>

@endsection

@section('table-body')

	<tr>
	    <td class="py-1">
	      <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
	    </td>
	    <td>
	      Herman Beck
	    </td>
	    <td>
	      <label class="badge badge-danger">Inactivo</label>
	    </td>
	    <td>
	      $ 77.99
	    </td>
	    <td>
	    	<div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('maestros.editar') }}" class="btn btn-outline-secondary px-2">Editar</a>
              <a href="{{ route('maestros.ver') }}" class="btn btn-outline-secondary px-2">Ver</a>
              <button class="btn btn-outline-secondary px-2">Eliminar</button>
            </div>
	    </td>
	</tr>
	<tr>
	    <td class="py-1">
	      <img src="{{ asset('fedamc/images/faces-clipart/pic-3.png') }}" alt="image">
	    </td>
	    <td>
	      Herman Beck
	    </td>
	    <td>
	      <label class="badge badge-warning">Activo</label>
	    </td>
	    <td>
	      $ 77.99
	    </td>
	    <td>
	    	<div class="btn-group" role="group" aria-label="Basic example">
	          <a href="{{ route('maestros.editar') }}" class="btn btn-outline-secondary px-2">Editar</a>
              <a href="{{ route('maestros.ver') }}" class="btn btn-outline-secondary px-2">Ver</a>
              <button class="btn btn-outline-secondary px-2">Eliminar</button>
	        </div>
	    </td>
	</tr>

@endsection