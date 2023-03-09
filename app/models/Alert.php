<?php

class Alert extends \Eloquent {
	
	protected $guarded = [];
	public static  $rules = array(
						'content'=>'Required'
					);

}