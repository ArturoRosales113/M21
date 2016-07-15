@extends('app')
@section('titulo')
Home
@endsection
@section('contenido')
<div class="row">
	<div class="slider fullscreen">
		<ul class="slides">
			<li>
				<img src="{{ url('imagenes/Portafolio/villa-briones/IMG_0864.jpg') }}"> <!-- random image -->
				<div class="caption">
					<h3 class="gillsansbold left-align">Villa Briones</h3>
					<div class="divider"></div>
					<p class="light grey-text text-lighten-3 flow-text">Equilibrio entre la modernidad de la ciudad con la tranquilidad del campo.</p>
				</div>
			</li>
			<li>
				<img src="{{ url('imagenes/Portafolio/aldea-zama-tulum/IMG_1119.jpg') }}"> <!-- random image -->
				<div class="caption">
					<h3 class="gillsansbold left-align">Aldea Zama</h3>
					<div class="divider"></div>
					<p class="light grey-text text-lighten-3 flow-text">Inspirado en la arquitectura Maya, este complejo ubicado en Tulum, Quintana Roo cuenta con dos torres que resaltan belleza y confort.</p>
				</div>
			</li>
			<li>
				<img src="{{ url('imagenes/Portafolio/Cr2/IMG_1369.jpg') }}"> <!-- random image -->
				<div class="caption">
					<h3 class="gillsansbold left-align">J.M. Mata</h3>
					<div class="divider"></div>
					<p class="light grey-text text-lighten-3 flow-text">Remodelación de la propiedad ubicada en el centro de Xalapa</p>
				</div>
			</li>
		</ul>
	</div>
</div>
@endsection
