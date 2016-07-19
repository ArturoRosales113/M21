@extends('app')

@section('titulo')

@endsection
@section('contenido')
<div class="row">
<div class="col s12">
	{!! Form::open(array('url'=>'backend/proyectos','method'=>'POST', 'files'=>true, 'class'=>'row')) !!}
	{!! Form::token(csrf_token()) !!}
	@include('backend.proyectos.formacrear')
	{!! Form::close() !!}

</div>	


</div>
@endsection