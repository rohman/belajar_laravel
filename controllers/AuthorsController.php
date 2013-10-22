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
				->with('title', 'Detail Author')
				->with('author', Author::find($id));
	}
	
	public function getNew()
	{
		return View::make('authors.new')
				->with('title', 'New Author');
	}
	
	public function postCreate()
	{
		$validation = Author::validation(Input::all());
		
		if($validation->fails())
		{
			return Redirect::route('newAuthor')->withErrors($validation)->withInput();
		}
		else
		{
			Author::create(
				array(
					'name' => Input::get('name'),
					'bio' => Input::get('bio')
				)		
			);		
			return Redirect::to('authors')->with('message', 'Successfully add author');
		}
	}
	

}
