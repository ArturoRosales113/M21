@extends('app')
@section('titulo')
Nosotros
@endsection
@section('contenido')
<div class="row">
	<div class="parallax-container row">
		<div class="parallax"><img src="{{ url($proyectos ->imgPortada) }}"></div>
	</div>

	<div class="row gris1  valign-wrapper">
		<div class="col s12 m2 offset-m7 valign-wrapper right-align">
			<h5 class="gillsanslight grey2 right-align">
				{{$proyectos ->title}}
			</h5>

		</div>
		<div class="col s12 m3 valign-wrapper left-align">
			<a class="parallaxlink" href="{{ url('home/proyecto/'.$proyectos->id) }}">Ver Proyecto</a> 
		</div>
	</div>
	
</div>
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
	<div class="col s12 m10 l8 offset-l2 offset-m1 center-align">
		<p class="flow-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, voluptas, sapiente! Ipsum quibusdam, optio fugit molestias itaque, quia natus alias amet ea, facere qui aspernatur ad nostrum soluta consectetur odio! Ullam vitae iste, vero, fugit cupiditate optio repellendus distinctio. Suscipit officia, ratione pariatur deserunt distinctio neque facilis. Odit molestias, modi quibusdam aliquam aperiam accusantium dignissimos explicabo corporis esse. Magnam, velit.
		</p>
		<img src="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" height="250px" alt="">
		<p class="flow-text">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consectetur suscipit autem quidem in sit, repellat, ipsum laborum officiis nobis nemo laudantium provident neque dolore soluta odio beatae eos dolorum accusantium consequatur, a sequi error cumque. Cumque consectetur explicabo voluptatem dolor aperiam, minima minus maiores neque corporis. Enim, reprehenderit ab.
		</p>
		<br>
		
		
	</div>
</div>
<div class="row">
	<div class="parallax-container row valign-wrapper">
		<div class="parallax "><img src="{{ url($proyectos ->imgPortada) }}"></div>
		<div class="col s12 m10 valign center-align">
			<div class="row section transp refinado">
				<div class="col s12  ">
					<div class="row">
						<div class="col s12 m10 offset-m1">
							<h5 class="gillsansbold white-text">{{$proyectos ->title}}</h5>
							<div class="divider"></div>
							<div class="section">

							</div>
							<a class="gris2 grey2 btn" href="{{ url('home/proyectos') }}">Conoce Nuestro Trabajo</a>  
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>
	
</div>
<div class="row section">
	<div class="col s12 m10 offset-m1">				
		<div class="row section valign-wrapper">
			<div class="col s12 m5 center-align valign">
				<img class="responsive-img" src="{{ url('imagenes/carlos2.jpg') }}" alt="">
			</div>
			<div class="col s12 m7 valign">
				<h5>
					<span class="gillsanslight grey2">Carlos Grajales</span>
				</h5>
				<small class="gillsansbold grey1">Arquitecto</small>

				<div class="divider"></div>
				<div class="section">
					
					<p class="flow-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta incidunt voluptatum accusamus iure inventore sed blanditiis aliquam rem dignissimos ex numquam eveniet optio, deleniti minima cupiditate beatae unde animi delectus quam.
					</p>
				</div>
				<h6 class="gillsansbold grey1"><small>TRAYECTORIA</small></h6>
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
<div class="row gris2 section">
	<div class="col s12 m10 offset-m1">
		<div class="row section">
			<div class="col s12">
				<div class="section">
					<h4 class="gillsanslight grey1">El EQUIPO</h4>
					<div class="divider"></div>
					<br>

				</div>
			</div>
		</div>
		<div class="row section">
			<div class="col s6 m6">
				<div class="row valign-wrapper">
					<div class="col s12 m4">
						<img class="responsive-img" src="{{ url('imagenes/team-1.jpg') }}" alt="">
					</div>

					<div class="col s12 m8 valign">
						<h6 class="gillsansbold grey1">
							<span class="gillsanslight">Nombre Apellido</span>
							
						</h6>
						<div class="divider"></div>
						<div class="section">
							<span class="gillsansbold grey1">Función</span>
						</div>
					</div>

				</div>
			</div>

			<div class="col s6 m6">
				<div class="row valign-wrapper">
					<div class="col s12 m4">
						<img class="responsive-img" src="{{ url('imagenes/team-1.jpg') }}" alt="">
					</div>

					<div class="col s12 m8 valign">
						<h6 class="gillsansbold grey1">
							<span class="gillsanslight">Nombre Apellido</span>
							
						</h6>
						<div class="divider"></div>
						<div class="section">
							<span class="gillsansbold grey1">Función</span>
						</div>
					</div>

				</div>
			</div>
		</div>

			<div class="row section">
			<div class="col s6 m6">
				<div class="row valign-wrapper">
					<div class="col s12 m4">
						<img class="responsive-img" src="{{ url('imagenes/team-1.jpg') }}" alt="">
					</div>

					<div class="col s12 m8 valign">
						<h6 class="gillsansbold grey1">
							<span class="gillsanslight">Nombre Apellido</span>
							
						</h6>
						<div class="divider"></div>
						<div class="section">
							<span class="gillsansbold grey1">Función</span>
						</div>
					</div>

				</div>
			</div>

			<div class="col s6 m6">
				<div class="row valign-wrapper">
					<div class="col s12 m4">
						<img class="responsive-img" src="{{ url('imagenes/team-1.jpg') }}" alt="">
					</div>

					<div class="col s12 m8 valign">
						<h6 class="gillsansbold grey1">
							<span class="gillsanslight">Nombre Apellido</span>
							
						</h6>
						<div class="divider"></div>
						<div class="section">
							<span class="gillsansbold grey1">Función</span>
						</div>
					</div>

				</div>
			</div>
		</div>

			
</div>
<div class="row section valign-wrapper no-padding">
	<div class="col s12 m6 valign">
		<div class="row">
			<div class="col s10 offset-m1 m10 offset-m1">
				<div class="section">
					<h4 class="right-align grey2">
						Nos encataría escuchar de ti
					</h4>
					<p class="right-align">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum esse vero atque, optio earum quis, nemo corporis vel deleniti, veniam culpa fugit sed consectetur ducimus tenetur sequi odio voluptate repellendus.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="col s12 m6 no-padding">
		<img src="{{ url($proyectos->imgPortada) }}" alt="" class="responsive-img">
	</div>
</div>
@endsection
@section('footer')
@include('footer')
@endsection
