@extends('layauts.template')

@section('title','Buscar usuario')

@section('content')

@include('layauts.nav_admin');

	<h1 class="title">Búsqueda de usuarios</h1>
	
	
	<form action="{{route('users.show')}}" method="post">
		
		@csrf
		
		<div class="form-sistomas">
			<div>
				<label>Cédula</label>
			</div>
			<div>
			<input type="text" name="cedula">
			</div>
			
			@error('cedula')
			<div>
				<small>No existe la cédula solicitada.</small>
			</div>
			@enderror
			
		</div>

			
				
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
	</form>
@endsection 