<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProyectosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('proyectos');//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->validate($request, [
			'title' 	=> 'required|unique:articles|max:255',
			'content'	=> 'required',
			'image' 	=> 'max:1024|required|image',
			'author' 	=> '',
			'tags' 	=> ''
			]);


		$imgName = str_random(10).'.'.Input::file('image')->getClientOriginalExtension();

		$image = Image::make(Input::file('image'));
		$image->save('images/articles/'.$imgName);
		
		$p = new Article;
		$p->title = $request->title;
		$p->content = $request->content;
		$p->img_path = 'images/articles/'.$imgName;
		$p->author = $request->author;
		$p->tags = $request->tags;
		$p->save();

		return redirect('backend/article');//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
