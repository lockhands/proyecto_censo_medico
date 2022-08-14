@extends('layauts.template')

@section('title','Administrador')

@section('content')

@include('layauts.nav_admin')

<?php $acum=0; ?>

<div class="container__grid--a">

		<ul>
			<h3>Reporte de virus:</h3>
		</ul>
	<ul>
		@foreach($virus as $role1)
		
			@foreach($role1->user as $obj1)
				<?php $acum=1+$acum; ?>
			@endforeach
			<li><p>{{$role1->nombre}}:{{$acum}}</p></li>
				<?php $acum=0; ?>
		
		@endforeach
		</ul>
		
		<ul>
			<h3>Reporte de síntomas:</h3>
		</ul>
		<ul>
		@foreach($sintomas as $role)
		
			@foreach($role->user as $obj)
				<?php $acum=1+$acum; ?>
			@endforeach
			<li><p>{{$role->nombre}}:{{$acum}}</p></li>
				
				<?php $acum=0; ?>
		
		@endforeach
		</ul>
			
		@endsection 
</div>
