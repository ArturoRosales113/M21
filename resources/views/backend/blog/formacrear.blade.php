

<div class="col s12 m10 offset-m1 l8">
	<div class="row">
		{{-- Título --}}
		<div class="col s12 unmargen">
			<div class="input-field">
				{!! Form::text('title', null,['class'=> 'validate', 'id'=>'title']) !!}
				{!! Form::label('title', 'Título', array('class'=>'gillsanslight', 'for'=>'title')) !!}
			</div>
		</div>
		
		{{-- Descripción Texto --}}
		<div class="col s12 unmargen">
			<div class="input-field">
				{!! Form::textarea('content', null,['class'=> 'validate materialize-textarea', 'id'=>'proyectosTA',]) !!}
				{!! Form::label('content', 'Contenido', array('class'=>'gillsanslight', 'for'=>'proyectosTA')) !!}
			</div>
		</div>

		{{-- Fotos --}}
		<div class="col s12 l8 offset-l2 unmargen">
			<div class="row gris1 section valign-wrapper">

				<div class="col s12 m6 offset m3 valign">
					<div class="file-field input-field">
						<div class="btn gris2">
							<span>Fotos</span>
							{!! Form::file('images[]', array('multiple'=>true, 'class'=> 'file-path validate grey2')) !!}
						</div>
					</div>
				</div>

				<div class="col s12 m6 offset m3 valign">
					<div class="file-field input-field">
						<div class="file-field input-field">
							<div class="btn gris2">
								<span>Portada</span>
								{!! Form::file('imgPortada', array('multiple'=>false)) !!}
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
</div>
<div class="col s12 m10 offset-m1 l4">

	<div class="row section ">

		<div class="col s12">
			<div class="section">
				<div class="input-field">
					<span class="grey1">Concluida el DD/MM/AA</span>
					{!! Form::text('year', null,['class'=> 'validate', 'id'=>'year']) !!}
				</div>
			</div>				
		</div>

		<div class="col s12">
			<div class="section">
				<div class="input-field">
					<span class="grey1">Autor:</span>
					{!! Form::text('author', null,['class'=> 'validate', 'id'=>'size']) !!}
				</div>
			</div>
		</div>

		<div class="col s12">
			<div class="section">
				<div class="input-field">
					<span class="grey1">Categoría</span>
					{!! Form::select('category', array('Arquitectura' => 'Arquitectura', 'Render' => 'Proyectos Independientes', 'Mobiliario' => 'Mobiliairio', 'Diseño de Interiores' => 'Diseño de Interiores'));  !!}

				</div>
			</div>
		</div>

		<div class="col s12">
			<div class="section center-align">
				{!! Form::submit('Publicar', array('class'=>'btn-large gris2 grey1')) !!}
			</div>
		</div>

	</div>

</div>



