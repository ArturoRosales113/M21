@extends('app')

@section('titulo')

@endsection
@section('contenido')
<div class="row">
<div class="col s12">
	{!! Form::open(array('url'=>'backend/blog','method'=>'POST', 'files'=>true, 'class'=>'row')) !!}
	{!! Form::token(csrf_token()) !!}
	@include('backend.blog.formacrear')
	{!! Form::close() !!}

</div>	


</div>
@endsection