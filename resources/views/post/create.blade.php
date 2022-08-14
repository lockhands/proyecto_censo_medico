@extends('layauts.template')

@section('title','Crear noticia')

@section('content')

@include('layauts.nav_admin');
		<h1 class="title">Ingresa una noticia</h1>
	
	
	
	<form action="{{route('post.store')}}" method="POST">
		
		@csrf
		
		<div class="form-create" >
			<div>
			<label>Título*: </label>
			</div>
			
			
			<div>
				<input type="text" name="title" required>
			</div>
			<div>
			<label>Mensaje*:	</label>
			</div>
			<div>
				<textarea  type="text" name="mensaje" rows="10" cols="30"				required></textarea>
			</div>
			
			
			@error('cedula')
			<div>
				<small>No existe la cédula solicitada</small>
			</div>
			@enderror
		
		
		</div>
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
			
		
		
		
		
	</form>
@endsection 