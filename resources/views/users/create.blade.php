@extends('layauts.template')

@section('title','Crear usuario')

@section('content')
<div class="container__grid">
	<h1 class="title">Registro de usuarios</h1>
	
	<form action="{{route('users.store')}}" method="POST">
		
		@csrf


		<div class="form-create" >
			
			<div>
				<label>Correo*:</label><input  type="text" name="correo" required>
			</div>
			<div>
				<label>Clave*: </label><input type="password" name="clave" required>
			</div>
			
			<div>
			¿Eres menor de edad?
			<input type="checkbox" name="age" value="18" id="">
			</div>
		

			

		</div>
		<div class="pos-button">
			<button type="submit" class="buttom-submit">Enviar formulario</button>
		</div>
		
		
		
	</form>
<div>
	<a class="buttom-submit button-link" href="{{route('users.login')}}">Iniciar sesión</a>
	<a class=" buttom-submit button-link" href="{{route('users.create')}}">Registro</a>
</div>
</div>
@endsection  