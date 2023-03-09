<?php

class Photo extends \Eloquent {
	protected $fillable = ['caption','album_id','image_url'];
	
	public static $rules = array(
									'image_url'=>'Required',
									'album_id' =>'Required'
								);


	public function album()
    {
        return $this->belongsTo('Album');
    }
}