
	<div class="col s12">
		{!! Form::open(array('url'=>'backend/proyectos','method'=>'POST', 'files'=>true, 'class'=>'row')) !!}

		<div class="col s12 m10 offset-m1 l3">
			<div class="input-field">
				{!! Form::text('title', null,['class'=> 'validate', 'id'=>'title']) !!}
				{!! Form::label('title', 'Título', array('class'=>'gillsanslight', 'for'=>'title')) !!}
			</div>
		</div>

		<div class="col s12 m7 offset-m1 l6">
			<div class="row">
				
				<div class="col s12">
					<div class="input-field">
						{!! Form::textarea('content', null,['class'=> 'validate materialize-textarea', 'id'=>'proyectosTA',]) !!}
						{!! Form::label('content', 'Descripción Del Proyecto', array('class'=>'gillsanslight', 'for'=>'proyectosTA')) !!}
					</div>
				</div>

				<div class="section">
					<div class="divider"></div>
				</div>

				<div class="col s12 m6 offset m3">
					<div class="file-field input-field">
						<div class="btn grey">
							<span>Fotos</span>
							{!! Form::file('images[]', array('multiple'=>true, 'class'=> 'file-path validate grey2')) !!}
						</div>
					</div>
				</div>

				<div class="col s12 m6 offset m3">
					<div class="file-field input-field">
						<div class="btn grey">
							<span>Portada</span>
							{!! Form::file('imgPortada', array('multiple'=>false, 'class'=> 'file-path validate grey2')) !!}
						</div>
					</div>
				</div>
			
				<div class="col s12 m6">
					<div class="section">
						<div class="input-field">
						<span class="grey1">Concluida el DD/MM/AA</span>
						{!! Form::text('year', null,['class'=> 'validate', 'id'=>'year']) !!}
					</div>
					</div>
				
				</div>
				<div class="col s12 m6">
					<div class="section">
						<div class="input-field">
						<span class="grey1">Metros de Construcción</span>
						{!! Form::text('size', null,['class'=> 'validate', 'id'=>'size']) !!}
					</div>
					</div>
				
				</div>

				<div class="col s12 m6">
					<div class="section">
						<div class="input-field">
							<span class="grey1">Categoría</span>
							{!! Form::select('category', array('arq' => 'Arquitectura', 'Render' => 'Proyectos Independientes', 'mobiliario' => 'Mobiliairio', 'disInt' => 'Diseño de Interiores'));  !!}
						</div>
					</div>
				
				</div>
			</div>

		</div>
		<div class="col s12 m3">
			{!! Form::submit('Publicar', array('class'=>'btn large gris2 grey1')) !!}

		</div>
		{!! Form::close() !!}
	</div>

	
</div>

