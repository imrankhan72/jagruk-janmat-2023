<?php

class Video extends \Eloquent {
	protected $fillable = ['link','caption','type'];

	public static $rules = array(
									'link'=>'Required'
								);
}