<?php

class UserInfo extends \Eloquent {
    protected $fillable = [];

    protected $table = 'userinfo';

    protected $guarded = [''];

    public function user(){
        return $this->belongsTo('User','user_id','id');
    }

}