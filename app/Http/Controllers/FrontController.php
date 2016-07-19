<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Proyectos;
use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$proyectos= Proyectos::all()->random(3);
		return view('home', ['proyectos'=> $proyectos]);
	}
	public function getNosotros()
	{
		$proyectos= Proyectos::all()->random(1);
		return view('nosotros', ['proyectos'=> $proyectos]);
	}

	public function getProyectos()
	{
		$proyectos = Proyectos::all();
		
		return view('proyectos', ['proyectos' => $proyectos]);
	}
	public function getProyecto($id){
		$proyecto = Proyectos::Find($id);
		$paths_decodificados = json_decode($proyecto->img_paths);
		return view('proyectoIndv',['proyecto'=> $proyecto ,'paths' => $paths_decodificados]);
	}
	public function getContacto()
	{
		$proyectos= Proyectos::all()->random(1);
		return view('contacto', ['proyectos'=> $proyectos]);
	}
	public function getTienda()
	{
		return view('tienda');
	}

	public function getBlog()
	{
		$proyectos= Proyectos::all()->random(1);
		return view('blog', ['proyectos'=> $proyectos]);
	}
	

}
