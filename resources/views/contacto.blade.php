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
		<div class="row section">
			<div class="col s12 m10 offset-m1">
					<img src="{{url('imagenes/logos/redesosciales_perfil_facebook.png')}}" height="400px" alt="">
				<h5 class="gillsansbold">Contacto</h5>
				<div class="divider"></div>
				<br>
				<span>Magnolias #21, Fuentes de las Animas <br> 91190 Xalapa Enríquez, Ver.</span>
				<br>
				<br>
				<span>228-266-04-73</span>
				<br>
				<br>
				<span>contacto@m21arquitectura.com</span>
			</div>
		</div>
	</div>
</div>
@endsection