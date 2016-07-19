@extends('appproyectos')
@section('titulo')
{{$proyecto->title}}
@endsection

@section('nombreproyecto')
{{$proyecto->title}}
@endsection
@section('descripcionproyecto')
{{$proyecto->content}}
@endsection
@section('yearconstruccion')
{{$proyecto->year}}
@endsection
@section('mtsconstruccion')
{{$proyecto->size}}
@endsection
@section('fotosproyecto')
	@foreach($paths as $path)
	<a class="carousel-item" href="#"><img src="{{url($path)}}" alt=""></a>
	@endforeach
@endsection
