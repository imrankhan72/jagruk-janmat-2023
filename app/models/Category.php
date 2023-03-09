<?php

class Category extends \Eloquent {
	protected $guarded = [];

	public static $rules = array();

	public function articles()
	{
		return $this->belongsToMany('Article');
	}


	public function subcategories()
    {
        return $this->HasMany('Subcategory');
    }
}