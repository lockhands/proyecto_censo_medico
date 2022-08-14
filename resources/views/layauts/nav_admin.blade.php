
<nav class="nav-admin">
	<ul class="nav-admin__ul">
		<!--
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="route('admin.index')">Home</a>
		</li>
		-->
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="{{route('admins.index')}}">Home</a>
		</li>
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="{{route('users.search')}}">Buscar usuario</a>
		</li>
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="{{route('notification.create')}}">Crear notificación</a>
		</li>
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="{{route('post.create')}}">Crear noticia</a>
		</li>
		<li class="nav-admin__li">
			<a class="nav-admin__a title-nav" href="{{route('welcome')}}">Cerrar sesión</a>
		</li>
	</ul>
</nav>
