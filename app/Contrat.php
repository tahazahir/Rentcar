<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model {

	protected $fillable = ['car_id','client_id','depart_date','return_date','depart_place','return_place','price','nbdayrent','return_hour','depart_hour','conductor_id','depart_km','return_km','num_facture','return_etat_comm','depart_etat_comm','type_caution','num_caution'];

	public function client(){
		return $this->belongsTo('App\Client');
	}

	public function car(){
		return $this->belongsTo('App\Car');
	}

	public function conductor(){
		return $this->belongsTo('App\Conductor');
	}

}
