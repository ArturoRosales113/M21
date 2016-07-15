@extends('app')

@section('titulo')

@endsection
@section('contenido')
<div class="row">
	<div class="col s12 m10 offset-m1">
		<h3 class="gillsansnbold">Proyectos</h3>
		<div class="divider"></div>

	</div>
</div>
<div class="row section">
	<div class="col s6 offset-s6 m4 offset-m8 l3 offset-l8">
		
		<a href="{{ url('backend/proyectos/create') }}" class="right btn-large gris2 grey1">+ Nuevo</a>
	</div>
</div>
<div class="row section">
	<div class="col s12 l10 offset-l1 no-padding">
		@foreach($proyectos as $p)
		<div class="row section">
			<div class="col s12 m10 offset-m1">
				<img src="{{ url($p -> imgPortada) }}" class=" image-backend" alt="">	
			</div>
		</div>
		<div class="row valign-wrapper section">
			<div class="col s12 m5 valign">
				<h5 class="center-align gillsansbold ">{{ $p -> title}}</h5>
			</div>
			
			<div class="col s12 m7">
				<p class="flow-text">
					{{ $p-> content}}
				</p>
			</div>
		</div>

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
		<div class="row gris1 valign-wrapper">
			<div class="col s12 m7 valign">
					<div class="section">
						<h6 class="gillsansbold center-align">Acciones</h6>	
					</div>
			</div>
			<div class="col s12 m5">
				<div class="row valign-wrapper section">
					<div class="col s12 m6 center-align valign">
					<div class="section">
						{!! Form::open(array('route' => array('backend.proyectos.destroy', $p->id), 'method' => 'delete','onsubmit' => 'return confirm("Eliminar '.$p->title.'?");')) !!}
						{!! Form::submit('Eliminar', array('class'=>'btn-large gris2')) !!}
						{!! Form::close() !!}
					</div>
					</div>
					<div class="col s12 m6 center-align">
						<div class="section">
							<a href="{{ url('backend/proyectos/'.$p->id.'/edit') }}" class="btn-large gris2">editar</a>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
</div>
@endsection


