<?php

class CategoriesController extends \BaseController {



	public function index()
	{
		$category= Category::all();
		return View::make('categories.index')->with('category',$category) ->with('title',"category Details");
	}



	public function create()
	{
		return View::make('categories.create') ->with('title',"Create category");
	}



	public function store()
	{
		$rules=[
			'name'=>'required'
		];

		$validator=Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {


			$category = new Category;
			$category->name  = Input::get('name');


			$category->save();

			return Redirect::route('categories.index')->with('success', 'Successfully created!');
		}
	}




	public function show($id)
	{
		//
	}




	public function edit($id)
	{


		$category = Category::findOrFail($id);

		return View::make('categories.edit')->with('category',$category)->with('title',"Edit category");

	}







	public function update($id)
	{
		$rules=[
			'name'=>'required'
		];

		$validator=Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$category =Category::find($id);
			$category->name  = Input::get('name');


			$category->save();

			return Redirect::route('categories.index')->with('success', 'Successfully Updated!');
		}
	}





	public function destroy($id)
	{
		$category=Category::find($id);

		$category->delete();
		return Redirect::route('categories.index');
	}


}
