<?php

class Link extends \Eloquent {
	protected $fillable = ['name','url','link_type'];

	public static $rules = array(
									'name'=>'Required',
									'url'=>'Required'
								);
}