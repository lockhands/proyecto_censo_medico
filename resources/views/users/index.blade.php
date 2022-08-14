@extends('layauts.template')

@section('title','Index')

@section('content')
  <ul class="nav-admin__ul">
	<li class="nav-admin__li"> <a class="nav-admin__a" href="{{route('welcome')}}">Cerrar sesión</a></li>
  </ul>

<div class="container__grid">
	

	<div>Notificaciones:</div>
<ul>
	@foreach($user->notification as $notificacion)
	
	<li>{{$notificacion->mensaje}}</li>
		
	@endforeach
</ul>
	<div>Noticias:</div>
<ul>
	@foreach($noticias as $noticia)
	<li>
		<p>{{$noticia->title}}</p>
		<p>{{$noticia->mensaje}}</p>
	</li>
	@endforeach
</ul>

</div>
	
	
@endsection 