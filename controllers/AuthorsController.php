<?php
class AuthorsController extends BaseController
{
	
	public function getIndex()
	{
		return View::make('authors.index')
				->with('title', 'Author And Books')
				->with('authors', Author::orderBy('name')->get());
	}

	public function getView($id)
	{
		return View::make('authors.view')
				->with('title', 'Author Detail')
				->with('author', Author::find($id));
	}

	public function getNew()
	{
		return View::make('authors.new')
				->with('title','New Author');	
	}

	public function postCreate()
	{
		$validation = Author::validate(Input::all());
		
		if($validation->fails())
		{
			return Redirect::route('newAuthor')->withErrors($validation)->withInput();
		}
		else
		{

			Author::create(array(
				'name'=> Input::get('name'),
				'bio'=> Input::get('bio')
			));
			return Redirect::to('authors')->with('message', 'Author Success Created');
		}
	}

	public function getEdit($id)
	{
		return View::make('authors.edit')
				->with('title', 'Edit Author')
				->with('author', Author::find($id));
	}
	
	public function putUpdate()
	{
		$id = Input::get('id');
		
		$validation = Author::validate(Input::all());
		if($validation->fails())
		{
			return Redirect::route('editAuthor', $id)->withErrors($validation)->withInput();
		}
		else
		{
			$author = Author::find($id);
			$author->name = Input::get('name');
			$author->bio = Input::get('bio');
			
			$author->save();
			//Author::update($id, array(
				// 'name' => Input::get('name'),
				// 'bio' => Input::get('bio')
			// ));
			return Redirect::route('authors')->with('message', 'Author Success Update');
		}
		
	}

}
