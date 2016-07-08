@extends('app')
@section('titulo')
Nosotros
@endsection
@section('contenido')
<div class="row">
	<div class="col s12 l8">
		<div class="row">
			<div class="col s12 m10 offset-m1 center-align">
				<h4 class="left-align gillsansbold">Más que solo diseño</h4>
				<p class="flow-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore explicabo, placeat, sapiente fugit mollitia officiis expedita dicta nemo culpa, fugiat ullam est architecto molestias, saepe odit! I
				</p>
				<img src="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" height="400px" alt="">
				<p class="flow-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consectetur suscipit autem quidem in sit, repellat, ipsum laborum officiis nobis nemo laudantium provident neque dolore soluta odio beatae eos dolorum accusantium consequatur, a sequi error cumque. Cumque consectetur explicabo voluptatem dolor aperiam, minima minus maiores neque corporis. Enim, reprehenderit ab.
				</p>
				<br>
				<a class="grey-text text-darken-2 grey lighten-2 btn" href="{{ url('proyectos') }}">Conoce Nuestro Trabajo</a>
				<br><br>
			</div>

			<div class="col s12 m10 offset-m1">
				<h4 class="gillsansbold">Carlos Grajales</h4>
				<div class="divider"></div>
				<div class="row section valign-wrapper">
					<div class="col s12 m8">
						<div class="section">
							<h5 class="gillsansbold">Arquitecto</h5>
							<div class="divider"></div>
							<p class="flow-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta incidunt voluptatum accusamus iure inventore sed blanditiis aliquam rem dignissimos ex numquam eveniet optio, deleniti minima cupiditate beatae unde animi delectus quam.
							</p>
						</div>
						<div class="section">
							<h6 class="gillsansbold">TRAYECTORIA</h6>
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
					<div class="col s12 m4 center-align valign">
						<img class="responsive-img" src="{{ url('imagenes/carlos2.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 l4 grey lighten-2 no-padding costilla hide-on-med-and-down">
		<img class="responsive-img" src="{{url('imagenes/Portafolio/Cr2/IMG_1363.jpg')}}" alt="">
		<img class="responsive-img" src="{{url('imagenes/Portafolio/villa briones/_MG_8237.jpg')}}" alt="">
	</div>
</div>
@endsection