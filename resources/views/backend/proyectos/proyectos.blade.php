@extends('app')

@section('titulo')

@endsection
@section('contenido')
<div class="row">
	<div class="col s12 m10 offset-m1">
		<h5 class="gillsansbold">Proyectos</h5>
		<div class="divider"></div>

	</div>
</div>
<div class="row section">
	<div class="col s6 offset-s6 m3 offset-m8 l3 offset-l8">

		<a href="{{ url('backend/proyectos/create') }}" class="right btn gris2 grey1"><small>+ Nuevo</small></a>
	</div>
</div>

<div class="row section">

	<div class="col s12 l10 offset-l1 no-padding">

		@foreach($proyectos as $p)

		<div class="row section valign-wrapper">
			<div class="col s12 m6 no-padding">	
				<div class="row">
					<div class="image-backend-wrapper">
						<img src="{{ url($p -> imgPortada) }}" class="image-backend" alt="">
					</div>
					<div class="col s12 no-padding">

						<div class="row gris2">
							<div class="col s6 m4 center-align grey1 refinado">
								<div class="section">
									<span class="gillsansbold">
										Categoría
										<br>
										<small class="gillsanslight container">
											{{$p-> category}}
										</small>
									</span>
								</div>
							</div>

							<div class="col s6 m4 center-align grey1 refinado">
								<div class="section">
									<span class="gillsansbold">
										Tamaño
										<br>
										<small class="gillsanslight container">
											{{$p-> size}}
										</small>
									</span>
								</div>
							</div>

							<div class="col s12 m4 center-align grey1 refinado">
								<div class="section">
									<span class="gillsansbold">
										Año
										<br>
										<small class="gillsanslight container">
											{{$p-> year}}
										</small>
									</span>
								</div>
							</div>
						</div>
					</div>
					
				</div>	
			</div>
			<div class="col s12 m6 valign">
				<div class="row  section">
					<div class="col s12 valign">
						<h5 class="center-align gillsansbold ">{{ $p -> title}}</h5>
					</div>

					<div class="col s12 center-align">
						<div class="contianer center-align">
							<p class="flow-text">
								{{ $p-> content}}
							</p>
						</div>
					</div>
					<div class="col s12 no-padding">
						<div class="row section valign-wrapper">

							<div class="col s12 valign">

								<h6 class="gillsansbold left-align">Acciones</h6>	

							</div>

							<div class="col s12">
								<div class="row valign-wrapper section">
									<div class="col s12 m6 center-align valign">

										{!! Form::open(array('route' => array('backend.proyectos.destroy', $p->id), 'method' => 'delete','onsubmit' => 'return confirm("Eliminar '.$p->title.'?");')) !!}
										{!! Form::submit('Eliminar', array('class'=>'btn-large gris2')) !!}
										{!! Form::close() !!}

									</div>
									<div class="col s12 m6 center-align">

										<a href="{{ url('backend/proyectos/'.$p->id.'/edit') }}" class="btn-large gris2">editar</a>

									</div>

								</div>
							</div>

						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection


