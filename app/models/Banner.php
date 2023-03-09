<?php

class Banner extends \Eloquent {
	protected $guarded = [];
	public static $rules = array(
									'name'=>'Required'
								);
}