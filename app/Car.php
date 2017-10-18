<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model {

	protected $fillable = ['marque','model','immatricule','color','price','circulation_date','rent_price','km','carburant','transformation','gps','clim','visible','promotion','etat'];

}
