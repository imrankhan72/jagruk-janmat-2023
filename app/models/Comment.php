<?php

class Comment extends \Eloquent {
	protected $guarded = [];

	public static $rules = array();

	public function article()
	{
		return $this->belongsTo('Article');
	}
}