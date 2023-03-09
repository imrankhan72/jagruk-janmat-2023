<?php

class Slider extends \Eloquent {
	protected $fillable = ['image_url','caption','link'];

	public static $rules = array(
									'image_url'=>'Required'
								);

}