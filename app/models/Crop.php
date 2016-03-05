<?php

class Crop extends \Eloquent {
	protected $table ='crops';
	protected $fillable = [];



	public function categories()
	{
		return $this->belongsTo('Category','category_id','id');
	}



	public function product()
	{
		return $this->hasMany('Product','crop_id','id');
	}

}