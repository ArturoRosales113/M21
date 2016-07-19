<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Intervention\Image\Facades\Image;
use App\Proyectos;

class ProyectosController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$proyectos = Proyectos::all();

		return view('backend.proyectos.proyectos', ['proyectos' => $proyectos]);//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.proyectos.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$images = Input::file('images');
		$img_paths = array();	
		foreach ($images as $image) {
			$imgName = $image->getClientOriginalName();
			$i = Image::make($image);
			$fullPath = 'imagenes/proyecto/'.$imgName;
			$i->save($fullPath);
			array_push($img_paths, $fullPath);
		}
				// Foto de Portada
		$portada = Input::file('imgPortada');
		$portadaName = $portada->getClientOriginalName();
		$portadaImg = Image::make($portada);
		$portadaPath = 'imagenes/proyecto/'.$portadaName;
		$portadaImg->save($portadaPath);
			// Foto de Portada
		
		
		$p = new Proyectos;
		$p -> title =$request->title;
		$p -> content =$request->content;
		$p -> year =$request->year;
		$p -> size =$request->size;
		$p -> category =$request->category;
		$p ->imgPortada =$portadaPath;
		$p -> img_paths =json_encode($img_paths);
		$p->save();
		return redirect('backend/proyectos');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Obtenemos el Proyectos
		$proyecto = Proyectos::Find($id);

		//Pasamos el json a array() en una variable
		$paths_decodificados = json_decode($proyecto->img_paths);

		//Ya que están combertidos en arreglo, accesamos a cada elemento de este con un índice
		$paths_decodificados[0]; //También podría ser $proyecto_decodificado[1], $proyecto_decodificado[2], etc.

		//Si lo que quieres iterar todo el arreglo con un ciclo foreach
		foreach ($paths_decodificados as $path) {
			// Hacer algo con $path
		}

		//Para que veas que queda en cada variable
		//dd($paths_decodificados[0]);
		//dd($paths_decodificados[1]);
		//dd($paths_decodificados[2]);
		//dd($paths_decodificados);

		/*
			Toma en cuenta que por lo general lo que quieres es mandar
			el proyecto completo a la vista y en ella decodificar
			el json.
		*/

		//Regresa la vista que quieras con el proyecto completo, ya en 
		//la vista decodificas el json
		return view('backend.proyectos.show', ['proyecto' => $proyecto]);////
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proyecto = Proyectos::Find($id);
		$paths_decodificados = json_decode($proyecto->img_paths);
		//dd($proyecto);
		return view('backend.proyectos.edit', ['proyecto' => $proyecto,'paths' => $paths_decodificados]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{	
		$proyecto = Proyectos::find($id);
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$proyecto = Proyectos::Find($id);
		$paths_decodificados = json_decode($proyecto->img_paths);	
		foreach ($paths_decodificados as $image) {
			$fullPath = $image;
			$i = Image::make($fullPath);
			$i->destroy($fullPath);
		}
		$proyecto->delete();
		return redirect('backend/proyectos');//
	}

}
