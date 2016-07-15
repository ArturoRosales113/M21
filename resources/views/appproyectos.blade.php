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
  <div class="row valign-wrapper">
    <div class="col s12 m4 valign">
      <div class="row">
       <div class="col s12 m10 offset-m1">
        <h5 class="gillsansbold grey2 container">@yield('nombreproyecto')</h5>
        <div class="section">
          <div class="divider container"></div>
        </div>
        <div class="section">
          <p class="flow-text container">
            @yield('descripcionproyecto')
          </p>
        </div>

        <div class="section container">
          <span class="gillsansbold">Año:  </span><span>@yield('yearconstruccion')</span>
          <br>
          <span class="gillsansbold">Mt2:  </span><span>@yield('mtsconstruccion')</span>
        </div>
      </div>
    </div>
  </div>
  <div class="col s12 m8">
  
    @yield('fotosproyecto')

  </div>
</div>
</main>
<footer>
  @include('footer') 
</footer>
@include('scripts')
@yield('specialscripts')
</body>
</html>