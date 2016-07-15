@extends('app')
@section('titulo')
Nosotros
@endsection
@section('contenido')
<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="section">
			<h5 class="left-align">
				<span class="gillsansbold grey2">Nosotros</span>
				<br>
				<small class="gillsanslight grey1">Filosofía | Equipo | Servicios</small>
			</h5>
			<div class="divider"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12 m10 offset-m1 center-align">
		<p class="flow-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, voluptas, sapiente! Ipsum quibusdam, optio fugit molestias itaque, quia natus alias amet ea, facere qui aspernatur ad nostrum soluta consectetur odio! Ullam vitae iste, vero, fugit cupiditate optio repellendus distinctio. Suscipit officia, ratione pariatur deserunt distinctio neque facilis. Odit molestias, modi quibusdam aliquam aperiam accusantium dignissimos explicabo corporis esse. Magnam, velit.
		</p>
		<img src="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" height="250px" alt="">
		<p class="flow-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consectetur suscipit autem quidem in sit, repellat, ipsum laborum officiis nobis nemo laudantium provident neque dolore soluta odio beatae eos dolorum accusantium consequatur, a sequi error cumque. Cumque consectetur explicabo voluptatem dolor aperiam, minima minus maiores neque corporis. Enim, reprehenderit ab.
		</p>
		<br>
		<a class="gris1 grey2 btn-large" href="{{ url('proyectos') }}">Conoce Nuestro Trabajo</a>
		<br><br>
	</div>
</div>
<div class="row section">
	<div class="col s12 m10 offset-m1">				
		<div class="row section valign-wrapper">
			<div class="col s12 m4 center-align valign">
				<img class="responsive-img" src="{{ url('imagenes/carlos2.jpg') }}" alt="">
			</div>
			<div class="col s12 m8 valign">
				<h5>
					<span class="gillsansbold grey2">Carlos Grajales</span>
					<br>
					<small class="gillsanslight grey1">Arquitecto</small>
				</h5>

				<div class="divider"></div>
				<div class="section">
					
					<p class="flow-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta incidunt voluptatum accusamus iure inventore sed blanditiis aliquam rem dignissimos ex numquam eveniet optio, deleniti minima cupiditate beatae unde animi delectus quam.
					</p>
				</div>
				<h6 class="gillsansbold grey1">TRAYECTORIA</h6>
				<div class="container">
					<span>• Lorem ipsum dolor sit amet, consectetur.</span>
					<br>
					<span>• Lorem ipsum dolor sit amet, consectetur.</span>
					<br>
					<span>• Lorem ipsum dolor sit amet, consectetur.</span>
					<br>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="row">
			<div class="col s12 m4">
				<div class="container">
					
				</div>
			</div>
			<div class="col s12 m4">
				<div class="container">
					
				</div>
			</div>
			<div class="col s12 m4">
				<div class="container">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
@include('footer')
@endsection