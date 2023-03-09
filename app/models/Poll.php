<?php

class Poll extends \Eloquent {
	protected $guarded = [];

	public static $rules = array(
									'question'=>'Required'
								);
}