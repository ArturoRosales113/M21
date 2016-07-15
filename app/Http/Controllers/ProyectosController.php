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
		$p = new Proyectos;
		$p -> title =$request->title;
		$p -> content =$request->content;
		$p -> year =$request->year;
		$p -> size =$request->size;
		$p -> category =$request->category;
			
			// Foto de Portada
			$portada = Input::file('imgPortada');
			$portadaName = str_random(12).'.'.$portada->getClientOriginalExtension();
			$portadaImg = Image::make($portada);
			$portadaPath = 'imagenes/proyecto/'.$portadaName;
			$portadaImg->save($portadaPath);
			// Foto de Portada

		$p ->imgPortada =$portadaPath;
			// Fotos Poryecto
			$images = Input::file('images');
			$img_paths = array();	
				foreach ($images as $image) {
					$imgName = $image->getClientOriginalName().'.'.str_random(4).'.'.$image->getClientOriginalExtension();
					$i = Image::make($image);
					$fullPath = 'imagenes/proyecto/'.$imgName;
					$i->save($fullPath);
					array_push($img_paths, $fullPath);
			}			
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
		//
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
		return view('backend.proyectos.edit', ['proyecto' => $proyecto]);////
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$proyecto = Proyectos::Find($id);

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
		//$img = Image::make($product->img_path);
		//$img->destroy();
		//dd($img);
		$proyecto->delete();
		return redirect('backend/proyectos');//
	}

}
