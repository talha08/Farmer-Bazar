<?php

class CropsController extends \BaseController {



	public function index()
	{
		$crop= Crop::all();
		return View::make('crops.index')->with('crop',$crop) ->with('title',"Crop Details");
	}





	public function create()
	{
		$category = Category::all()->lists('name','id');
		return View::make('crops.create') ->with('title',"Create Crop ")->with('category',$category);
	}




	public function store()
	{


		$rules=[
			'crop_name' => 'required',
			'category_id' =>'required',

		];

		$data = Input::all();

		$validator=Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$crop = new Crop;
			$crop->crop_name  = $data['crop_name'];
			$crop->category_id = $data['category_id'];


			if($crop->save()){
				return Redirect::route('crops.index')->with('success', 'Successfully Created!');
			}

			else{
				return Redirect::route('crops.index')->with('error', 'Something Went Wrong. Try Again.');
			}


		}
	}

	/**
	 * Display the specified resource.
	 * GET /crops/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}




	public function edit($id)
	{


		$crop = Crop::find($id);
		$category = Category::all()->lists('name','id');

		return View::make('crop.edit')->with('crop',$crop)->with('title',"Edit Article")->with('category', $category);

	}
	/**
	 * Update the specified resource in storage.
	 * PUT /crops/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules=[
			'crop_name' => 'required',
			'category_id' =>'required',

		];

		$data = Input::all();

		$validator=Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$crop =Crop::find($id);
			$crop->crop_name  = $data['crop_name'];
			$crop->category_id = $data['category_id'];


			if($crop->save()){
				return Redirect::route('crops.index')->with('success', 'Successfully Created!');
			}

			else{
				return Redirect::route('crops.index')->with('error', 'Something Went Wrong. Try Again.');
			}


		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /crops/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$crop =Crop::find($id);

		$crop->delete();
		return Redirect::route('crops.index')->with('success','Successfully Deleted');
	}

}