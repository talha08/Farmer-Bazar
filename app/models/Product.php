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