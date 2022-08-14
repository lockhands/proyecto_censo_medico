@extends('layauts.template')

@section('title','Crear sintomas')

@section('content')
	<h1 class="title">Registro de estado de salud</h1>
	
	
		
	<form action="{{route('users.sintomas',$user)}}" method="post">
		
	
		@csrf
		
		@method('put')
		
		
<?php //Ciclos con blade ?>
	<div class="form-sintomas-create">
		<div>
			<h4>Seleccione el virus que presenta:</h4>
				
			@foreach ($virus->all() as $obj)
				
				<div class="form-sintomas-create__item">
					<label>{{$obj->nombre;}}</label><input type="checkbox" name="{{$obj->nombre;}}" value="{{$obj->id}}" id="">
				</div>
				
			
			@endforeach
		</div>
		<div>
			<h4>Selecciona los síntomas que presenta:</h4>
				
			@foreach ($sintomas->all() as $obj)
			   
			   <div class="form-sintomas-create__item">
					<label>{{$obj->nombre;}}</label><input type="checkbox" name="{{$obj->nombre;}}" value="{{$obj->id}}" id="">
			   </div>
			
			@endforeach
		</div>
		<div class="form-sintomas-create__item">
			<label>Añadir un síntoma:</label> <br> <br> <input type="text" name="nuevo_sintoma">
		</div>
		<div class="form-sintomas-create__item">
			<label>Añadir el centro de salud:</label> <br> <br> <input type="text" name="centro_medico" required>
		</div>
	</div>

	<div class="pos-button">
		<button type="submit" class="buttom-submit">Enviar formulario</button>
	</div>

	</form>
@endsection 