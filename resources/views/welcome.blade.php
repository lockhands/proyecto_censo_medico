<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/index.css">
        <title>Laravel</title>


    </head>
    <body class="antialias">

    <div class="container__grid--welcome">
      <div class="container__grid">
        <div class="posicion-esfera">
          <div class="esfera-color-1"></div>
          <div class="esfera-color-2"><h1>Welcome Tachira</h1></div>
          <div class="esfera-color-3"></div>
        </div>
      </div>
     <button class="buttom-submit">
      <a class="button-link" href="{{route('users.login')}}">Iniciar sesión</a>
     </button>
     <button class="buttom-submit"> 
      <a class="button-link" href="{{route('users.create')}}">Registro</a>
     </button>
    </div>
		
    </body>
</html>
