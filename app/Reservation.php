<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
	
	protected $fillable = ['car_id','client_id','depart_date','return_date','depart_place','return_place','price','nbdayrent','return_hour','depart_hour'];
	
	public function client(){
		return $this->belongsTo('App\Client');
	}

	public function car(){
		return $this->belongsTo('App\Car');
	}

}
