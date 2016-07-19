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
			<!-- Terraza Agrosan -->
			@foreach($proyectos as $p)			
			<div class="col s12 m6 l6">
				<div class="card">
					<div class="card-image waves-effect waves-block waves-light">
						<img class="activator" src="{{url($p->imgPortada)}}">
					</div>
					<div class="card-content">
						<span class="card-title activator grey1 gillsanslight">{{ $p->title}}<i class="material-icons right">more_vert</i></span>
					</div>
					<div class="card-reveal">
						<div class="row">
							<div class="col s12 m10-offset-m1">
								<div class="row section">
									<div class="col s12">
										<h5><span class="card-title gillsansbold grey2">{{ $p->title}}<i class="material-icons right">close</i></span></h5>
										<div class="divider"></div>
										<p class="flow-text">{{ $p->content}}</p>
										<div class="container center-align">
											<div class="section">
												<a href="{{ url('home/proyecto/'.$p->id) }}" class="btn-large gris2">Ver Proyecto</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<!-- Terraza Agrosan -->
		</div>
	</div>
	@endsection
	@section('footer')
	@include('footer')
	@endsection