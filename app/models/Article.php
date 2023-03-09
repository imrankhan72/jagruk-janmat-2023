<?php

use Carbon\Carbon;

class Article extends \Eloquent {
	protected $guarded = [];

	public static $rules = array();


    //Change the date format to whichever you desire
    public function getCreatedAtAttribute($attr) {
        return Carbon::parse($attr)->toDayDateTimeString();
    }

	public function category()
	{
		//return $this->belongsTo('Category');
		return $this->belongsToMany('Category');
	}

	public function user()
	{
		return $this->belongsTo('User');
	}


	public function comments()
	{
		return $this->hasMany('Comment');
	}
}