<?php

class Product extends \Eloquent {

    protected $table ='products';
    protected $fillable = [];

    public function crops()
    {
        return $this->belongsTo('Crop','crop_id','id');
    }

    public function user()
    {
        return $this->belongsTo('User','user_id','id');
    }
}

/*	Route::get('search',function(){
		$query= Input::get('q');
		$product= $query
			? Product::where('product_name', 'LIKE', "%$query%")->get()
			: Product::all();

		return View::make('main.all')->withProducts($product);

	}); */