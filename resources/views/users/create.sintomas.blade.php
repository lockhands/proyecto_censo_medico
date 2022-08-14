@extends('layauts.template')

@section('title','Crear sintomas')

@section('content')
	<h1>Bienvenido a la creaciooooooooooooon</h1>
	
	
	
	
	<form action="{{route('users.sintomas',$curso)}}" method="post">
		
		@csrf
		
		@method('put')
		
		<div class="form-sistomas">
			<div>
				<label>Virus</label><input type="text" name="virus">
			</div>
			<input type="hidden" name="id" value="{{$user->id}}">
					
			<div>
				<label>Síntoma:</label><input  type="text" name="sintoma" >
			</div>
			
			<div>
				<label>Añadir un síntoma: </label><input type="text" name="nuevo_sintoma">
			</div>
		</div>

				
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
	</form>
@endsection 