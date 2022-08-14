@extends('layauts.template')

@section('title','Crear cuenta')

@section('content')
	<h1 class="title">Registro de usuarios</h1>
	
	
	
	<form action="{{route('menor.store',compact('user'))}}" method="post">
		
		@csrf
		
		@method('put')
		
	<?php /*	<label>
			Nombre: 
			<br>
			<input type="text" name="nombre">
			<br>
		</label>
		
		<label>
			Apellido:
			<br>			
			<input  type="text" name="apellido" >
			<br>
		</label>
	*/?>
		
				
			<input  type="hidden" name="correo" value="{{$user->correo}}">
			<input  type="hidden" name="clave" value="{{$user->clave}}">
			<input  type="hidden" name="cedula" value="{{$user->cedula}}">
		
		
		<div class="form-create" >
		
			<div>
				<label>Nombre*: </label><input type="text" name="nombre" required>
			</div>
			<div>
				<label>Apellido*:	</label><input  type="text" name="apellido" required>
			</div>
			<div>
				<label><?php $sentence = isset($age) ?   "Cédula*:" : "Cédula del representante*" ;
				echo $sentence;?>
				</label><input  type="text" name="cedula" required>
			</div>
			<div>
				<label>dirección del municipio*:</label><input  type="text" name="dire_municipio" required>
			</div>
			<div>
				<label>dirección de la localidad*:</label><input  type="text" name="dire_localidad" required>
			</div>
			<div>
				<label>Teléfono fijo*:</label><input  type="text" name="tele_fijo" required>
			</div>
			<div>
				<label>Teléfono movil*:</label><input  type="text" name="tele_movil" required>
			</div>
			
			@error('cedula')
				<small>Solo se permiten números en la cédula</small>
			@enderror
			
			</div>
			
			<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar</button>
		</div>
			
			
		
		
		
	</form>
@endsection 