<?php

class Category extends \Eloquent {
	protected $table='categories';
	protected $fillable = [];




	public function crops()
	{
		return $this->hasMany('Crop','category_id','id');
	}
}