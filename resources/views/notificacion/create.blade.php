@extends('layauts.template')

@section('title','Crear notificacion')

@section('content')

@include('layauts.nav_admin');
		<h1 class="title">Ingresa una notificación</h1>
	
	
	<form action="{{route('notificacion.store')}}" method="POST">
		
		@csrf
		
		<div class="form-create" >
			
			<div>
			<label>Notificación*:	</label>
			</div>
			<div>
				<textarea  type="text" name="mensaje" rows="10" cols="30"				required></textarea>
			</div>
			
			<div>
			<label>Cédula*:	</label>
			</div>
			<div>
				<input  type="text" name="cedula" required>
			</div>
			
			
		
		</div>
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
	
	
	</form>
@endsection 