@extends('app')
@section('titulo')
Home
@endsection
@section('contenido')
<div class="row">
	<div class="slider fullscreen">
		<ul class="slides">
				@foreach($proyectos as $p)
				
			<li>
				<img src="{{ url($p->imgPortada) }}"> <!-- random image -->
				<div class="caption gris2 transparente">
					<h4 class="gillsanslight left-align">{{$p->title}}</h4>
					<div class="divider"></div>
					<p class="light grey2 flow-text"><small>{{$p->content}}</small></p>
				</div>
			</li>

			@endforeach
		</ul>
	</div>
</div>
@endsection
