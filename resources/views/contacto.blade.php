@extends('app')
@section('titulo')
Contacto
@endsection
@section('contenido')
<div class="row valign-wrapper">
	<div class="col s12 m12 l6 no-padding costilla">
		<iframe class="maparesponsivo" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.0779476029846!2d-96.8882265707683!3d19.528223263137267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db3228be706e41%3A0xec914d35339cda66!2sMagnolias+21%2C+Fuentes+de+las+Animas%2C+91190+Xalapa+Enr%C3%ADquez%2C+Ver.!5e0!3m2!1ses-419!2smx!4v1467448934361"  frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="col s12 m12 l6 valign">
		<div class="row section valign-wrapper">
			<div class="col s12 center-align">
				<img src="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" height="250px" alt="">
				<div class="section">
					<div class="divider"></div>
				</div>
			</div>
			<div class="col s12 m4 valign">
				<h6 class="gillsansbold grey2 center-align">Contacto</h6>
			</div>
			<div class="col s12 m8">
				<div class="row valign-wrapper">
					<div class="col s3 valign center-align">
						<i class="material-icons small grey1">location_on</i>
					</div>
					<div class="col s9 valign">
						<span>Magnolias #21 Fuentes de las Animas 91190 Xalapa Enríquez, Ver.</span>
					</div>
				</div>
				<div class="row valign-wrapper">
					<div class="col s3 valign center-align"><i class="material-icons small grey1">call</i></div>
					<div class="col s9 valign">
						<span>228-266-04-73</span>
					</div>
				</div>

				<div class="row valign-wrapper">
					<div class="col s3 valign center-align"><i class="material-icons small grey1">email</i></div>
					<div class="col s9 valign">
						<span>contacto@m21arquitectura.com</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
@endsection
@section('footer')
@include('footer')
@endsection