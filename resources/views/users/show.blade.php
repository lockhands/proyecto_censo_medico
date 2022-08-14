@extends('layauts.template')

@section('title','Curso' . " " . $user->nombre)

@section('content')

<div class="container">
<div class="container__grid">
	<h1 class="title">Datos personales del usuario: {{$user->nombre}}</h1>
	
	<div class="container__item">
	<h3>Datos personales::</h3>
	<ul>
	
		
		<li>Nombre*: {{$user->nombre}}</li>
		<li>Apellido*: {{$user->apellido}}</li>
		<li>Clave*: {{$user->clave}}</li>
		<li>Cédula*: {{$user->cedula}}</li>
		<li>Correo*: {{$user->correo}}</li>
		<li>Municipio*: {{$user->dire_municipio}}</li>
		<li>Localidad*: {{$user->dire_localidad}}</li>
		<li>Teléfono fijo*: {{$user->tele_fijo}}</li>
		<li>Teléfono movil*:{{$user->tele_movil}}</li>
		<li>Centro médico*:{{$user->centro_medico}}</li>
	
    </ul>
	</div>


<div class="container__item">
	<h3>El usuario posee::</h3>
	<ul>
	@foreach($user->enfermedad as $role)
		
		<li>{{$role->nombre}}</li>
		
	@endforeach
    </ul>
</div>

<div class="container__item">
	<h3>El usuario ha presentado los siguientes sintomas:</h3>
	<ul>
	@foreach($user->sintoma as $role)
		<li>{{$role->nombre}}</li>
	@endforeach
    </ul>

</div>

</div>
</div>

<div class="pos-button">

			<button type="submit" class="buttom-submit"><a href="{{route('admins.index')}}">Retroceder</a></button>
		</div>
		
@endsection 