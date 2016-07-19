@extends('app')
@section('titulo')
Blog
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
	
</div>
@endsection