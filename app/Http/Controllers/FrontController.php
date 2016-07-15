<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('home');//
	}
	public function getNosotros()
	{
		return view('nosotros');
	}

	public function getProyectos()
	{
		return view('proyectos');
	}
	public function getContacto()
	{
		return view('contacto');
	}
	public function getTienda()
	{
		return view('tienda');
	}

	public function getBlog()
	{
		return view('blog');
	}
	public function getAldeazama()
	{
		return view('aldeazama');
	}
	public function getCasaquina()
	{
		return view('casaquina');
	}
	public function getVillabriones()
	{
		return view('villabriones');
	}
	public function getBarmoctezuma()
	{
		return view('barmoctezuma');
	}
	public function getHangar()
	{
		return view('hangar');
	}
	public function getMata()
	{
		return view('mata');
	}

	public function getAgrosan()
	{
		return view('agrosan');
	}

}
