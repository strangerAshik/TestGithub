<?php 
class debitPurpose extends Eloquent{
	protected $table = 'debitPurposes';
	//public static $table='authors';
	/*
	public static $rules=array('name'=>'required|min:2','bio'=>'required|min:10');
	public static function validate($data){
		return Validator($data,static::$rules);
	}
	/*
	public static function getUserId($type,$purpose){
		
		return Purpose::where(function($query){$query->where('purpose', '=', $purpose)
													->where('type', '=', $type);
										})->first()->id;
	}
	*/
}
?>