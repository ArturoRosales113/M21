<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Intervention\Image\Facades\Image;
use App\Blogs;


class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$blogs = Blogs::all();
		return view('backend.blog.blogs',['blogs' => $blogs]);//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('backend.blog.create');
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
			$fullPath = 'imagenes/blog/'.$imgName;
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
		
		
		$p = new Blogs;
		$p -> title =$request->title;
		$p -> content =$request->content;
		$p -> year =$request->year;
		$p -> author =$request->author;
		$p -> category =$request->category;
		$p ->imgPortada =$portadaPath;
		$p -> img_paths =json_encode($img_paths);
		$p->save();
		return redirect('backend/blog');//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
