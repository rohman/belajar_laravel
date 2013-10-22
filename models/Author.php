<?php
class Author extends Eloquent
{
	protected $table = 'authors';
	protected $fillable = array('name', 'bio');
	
	public static $rules = array(
		'name' => 'required|min:2',
		'bio' => 'required|min:10',
	);
	
	public static function validation($data)
	{
		return Validator::make($data, static::$rules);
	}
}
