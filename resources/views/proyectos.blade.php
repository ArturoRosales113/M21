@extends('app')
@section('titulo')
Proyectos
@endsection
@section('contenido')
<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="section">
			<h5 class="left-align">
				<span class="gillsansbold grey2">Proyectos</span>
				<br>
				<small class="gillsanslight grey1">Imaginamos | Diseñamos | Construímos</small>
			</h5>
			<div class="divider"></div>
		</div>
	</div>
</div>
<div class="row section">
	<div class="col s12 m10 offset-m1">
		<div class="row">
			<div class="col s12 m6">
				<p class="flow-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis dolor accusamus soluta eligendi rem magnam blanditiis voluptates deleniti, architecto in atque inventore. Ab maxime ad, esse voluptatum ipsa quisquam dolorum vitae tempore quis ducimus ut, quaerat dignissimos laborum officiis repellat, dolore molestias delectus minus harum dolores exercitationem numquam earum possimus voluptatem porro. Optio soluta magni alias nesciunt, voluptate suscipit magnam?
				</p>
			</div>
			<div class="col s12 m6">
				<p class="flow-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi ea voluptatum fugit harum quasi quis inventore odio architecto similique beatae vel cum at ex obcaecati maiores consequuntur in praesentium rerum optio, recusandae vitae assumenda possimus adipisci quos, quaerat. Consequuntur, ex!
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row section">
	<div class="col s12 m10 offset-m1">
		<div class="divider"></div>
		<div class="row">
			<div class="col s12 m2 offset-m10">
				<h6>
					<span class="gillsansbold grey2">
						Filtro
					</span>
				</h6>
			</div>
		</div>
		<div class="divider"></div>
	</div>
</div>

<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="row">
			
			<!--ALDEA ZAMA-->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/aldea-zama-tulum/IMG_1115.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Aldea Zama<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Aldea Zama<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Inspirado en la  arquitectura Maya, este complejo ubicado en Tulum Quintana Roo cuenta con dos torres que resaltan belleza y confort.</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/aldeazama') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--ALDEA ZAMA-->

			<!-- Casa Quina-->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/casa-QUINA/Telefre-5.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Casa Quina<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Casa Quina<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Permite a la familia disfrutar detalles de la arquitectura mexicana, como muros anchos, madera integralmente planeada dentro de los espacios y colores vivos</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/casaquina') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Casa Quina-->

			<!-- Villa Briones-->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/villa-briones/IMG_0864.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Villa Briones<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Villa Briones<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Permite a la familia disfrutar detalles de la arquitectura mexicana, como muros anchos, madera integralmente planeada dentro de los espacios y colores vivos</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/villabriones') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Villa Briones-->

			<!-- Bar Moctezuma-->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/BAR-MOCTEZUMA/Mc13.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Bar Moctezuma<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Bar Moctezuma<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quaerat vitae ipsa quod, placeat amet soluta non accusamus facere sapiente!</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/barmoctezuma') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Bar Moctezuma-->

			<!-- Hangar-->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/hangar-particular/HangarF1.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Hangar<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Hangar<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quaerat vitae ipsa quod, placeat amet soluta non accusamus facere sapiente!</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/hangar') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hangar-->

			<!-- Bahía Principe Tulum -->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/bahia-principe-tulum/IMG_2068.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Bahía Príncipe Tulum<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Bahía Príncipe Tulum<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quaerat vitae ipsa quod, placeat amet soluta non accusamus facere sapiente!</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/agrosan') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Bahía Principe Tulum -->

			<!-- Mata -->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/Cr2/mata1.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Mata<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Mata<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quaerat vitae ipsa quod, placeat amet soluta non accusamus facere sapiente!</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/mata') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mata -->

			<!-- Terraza Agrosan -->
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url('imagenes/Portafolio/terraza-AGROSAN/1TC.jpg')}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">Terraza Agrosan<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">Terraza Agrosan<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quaerat vitae ipsa quod, placeat amet soluta non accusamus facere sapiente!</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large gris1 white-text " href="{{ url('/agrosan') }}">Ver proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Terraza Agrosan -->
		</div>
	</div>
	@endsection
	@section('footer')
	@include('footer')
	@endsection