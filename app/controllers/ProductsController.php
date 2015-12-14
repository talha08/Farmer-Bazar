<?php

class ProductsController extends \BaseController {


	public function index()
	{
		$product= Product::all();
		return View::make('products.index')->with('product',$product)
											->with('title',"Product Details");
	}



	public function create()
	{
        $crop = Crop::all()->lists('crop_name','id');
		return View::make('products.create') ->with('title',"Create Product")->with('crop',$crop);
	}



	public function store()
	{
		$destinationPath = public_path('uploads/products');

		$rules=[
			'product_name' => 'required',
			'crop_id' => 'required',
			'details' => 'required',
			'min_price' => 'required',
			'max_price' => 'required',
			'crop_id' => 'required',
			'location' => 'required',
			'expiry_date' => 'required',

		];

		$data = Input::all();

		$validator=Validator::make(Input::all(),$rules);

		if ($validator->fails()) {
			return Redirect::back()->withErrors($validator);
		} else {
			$photo_fileName = null;
			if (Input::hasFile('picture')){
				$photo = Input::file('picture');
				$photo_fileName = strtotime(date('P')).md5($photo->getClientOriginalName()).".".$photo->getClientOriginalExtension();
				$photo->move($destinationPath, $photo_fileName);
			}

			$position = $this->latlong($data['location']);


			$product = new Product;
            $product->product_name  = $data['product_name'];
            $product->details  = $data['details'];
            $product->min_price  = $data['min_price'];
            $product->max_price  = $data['max_price'];
            $product->crop_id  = $data['crop_id'];
            $product->location  = $data['location'];
            $product->expiry_date  = $data['expiry_date'];
			$product->user_id  = Auth::user()->id;



			$product->lat = $position['lat'];
			$product->long = $position['long'];

            if($photo_fileName != null){
                $product->picture = $photo_fileName;

            }


			if($product->save()){
				return Redirect::route('products.index')->with('success', 'Successfully Created!');
			}

			else{
				return Redirect::route('products.index')->with('error', 'Something Went Wrong. Try Again.');
			}


		}
	}


	public function latlong($location){

// Get lat and long by address
		$address = $location; // Google HQ
		$prepAddr = str_replace(' ','+',$address);
		$geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
		$output= json_decode($geocode);
		$latitude = $output->results[0]->geometry->location->lat;
		$longitude = $output->results[0]->geometry->location->lng;

		return ['lat'=>$latitude,
			'long'=>$longitude];

	}



	public function show($id)
	{
		$product= Product::find($id);
		return View::make('products.show')->with('product',$product) ->with('title',"Product Details");

	}




	public function edit($id)
	{


        $product = Product::find($id);
		$crop = Crop::all()->lists('crop_name','id');

		return View::make('products.edit')->with('product',$product)->with('title',"Edit Product")->with('crop', $crop);

	}







	public function update($id)
	{
        $destinationPath = public_path('uploads/products');

        $rules=[
            'product_name' => 'required',
            'crop_id' => 'required',
            'details' => 'required',
            'min_price' => 'required',
            'max_price' => 'required',
            'crop_id' => 'required',
            'location' => 'required',
            'expiry_date' => 'required',
			'picture'=>'required',

        ];

        $data = Input::all();

        $validator=Validator::make(Input::all(),$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $photo_fileName = null;
            if (Input::hasFile('picture')){
                $photo = Input::file('picture');
                $photo_fileName = strtotime(date('P')).md5($photo->getClientOriginalName()).".".$photo->getClientOriginalExtension();
                $photo->move($destinationPath, $photo_fileName);
            }

            $product =Product::find($id);
            $product->product_name  = $data['product_name'];
            $product->details  = $data['details'];
            $product->min_price  = $data['min_price'];
            $product->max_price  = $data['max_price'];
            $product->crop_id  = $data['crop_id'];
            $product->location  = $data['location'];
			$product->expiry_date  = $data['expiry_date'];

            if($photo_fileName != null){
                $product->picture = $photo_fileName;

            }


            if($product->save()){
                return Redirect::route('products.index')->with('success', 'Successfully Created!');
            }

            else{
                return Redirect::route('products.index')->with('error', 'Something Went Wrong. Try Again.');
            }


        }
	}






	public function destroy($id)
	{
        $product =Product::find($id);

        $product->delete();
		return Redirect::route('products.index')->with('success','Successfully Deleted');
	}




}