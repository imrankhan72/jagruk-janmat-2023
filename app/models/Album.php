<?php

class Album extends \Eloquent {
	protected $fillable = ['name'];
	
	public static $rules = array(
									'name'=>'Required'
								);

	public function photos()
    {
        return $this->hasMany('Photo');
    }
}