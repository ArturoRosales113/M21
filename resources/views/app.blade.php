<!DOCTYPE html>
<html lang="es">
<head>
  <!--  Título -->
  <title>M21 | @yield('titulo')</title>
  <!--  Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--  FavIcon -->
  <link rel=icon href="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" sizes="32x32 48x48 64x64" type="image/png">
  <!--  Css -->
  <link rel="stylesheet" href="{{url('css/normalize.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('css/main.css')}}" type="text/css">
  <link rel="stylesheet" href="{{url('css/materialize.css')}}" type="text/css">
  <!--  Iconos -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--  JavaScript -->
  <script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="{{url('js/materialize.js')}}"></script>
  <!--  Estilo -->
  @yield('estilo')
  <!--  /Estilo -->
</head>
<body>
  <header>
   @include('menu')
 </header>
 <main>
  @yield('contenido')
</main>
<footer>
  @include('footer') 
</footer>
@include('scripts')
@yield('specialscripts')
</body>
</html>