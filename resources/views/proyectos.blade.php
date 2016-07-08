@extends('app')
@section('titulo')
Proyectos
@endsection
@section('contenido')
<div class="row">
	<div class="col s12 m10 offset-m1">
		<div class="section">
			<h4 class="gillsansbold">Proyectos</h4>
			<div class="divider"></div>
			<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto ut temporibus nihil nisi ipsum veritatis illo omnis dolore. Ratione, quis eum consectetur repudiandae tenetur explicabo nam provident incidunt autem doloremque.</p>
		</div>

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
						<span class="card-title activator grey-text text-darken-4 gillsanslight">Aldea Zama<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey-text text-darken-4">Aldea Zama<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Inspirado en la  arquitectura Maya, este complejo ubicado en Tulum Quintana Roo cuenta con dos torres que resaltan belleza y confort.</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large grey lighten-1 white-text " href="{{ url('/aldeazama') }}">Ver proyecto</a>
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
						<span class="card-title activator grey-text text-darken-4 gillsanslight">Casa Quina<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey-text text-darken-4">Casa Quina<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Permite a la familia disfrutar detalles de la arquitectura mexicana, como muros anchos, madera integralmente planeada dentro de los espacios y colores vivos</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large grey lighten-1 white-text " href="{{ url('/casaquina') }}">Ver proyecto</a>
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
						<span class="card-title activator grey-text text-darken-4 gillsanslight">Villa Briones<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey-text text-darken-4">Villa Briones<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">Permite a la familia disfrutar detalles de la arquitectura mexicana, como muros anchos, madera integralmente planeada dentro de los espacios y colores vivos</p>
										<div class="container center-align">
											<div class="section">
												<a class="btn-large grey lighten-1 white-text " href="{{ url('/aldeazama') }}">Ver proyecto</a>
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

			

		</div>
	</div>
	@endsection