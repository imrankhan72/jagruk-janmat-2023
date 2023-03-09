<?php

class Subcategory extends \Eloquent {
	protected $guarded = [];

	public static $rules = array();

	  public function category()
    {
        return $this->BelongsTo('Category');
    }


    public function articles()
	{
		return $this->belongsToMany('Article');
	}
}