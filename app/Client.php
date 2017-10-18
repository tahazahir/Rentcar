<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $fillable = ['firstname','lastname','birth_date','cin','permis','passport','email','adresse','city','birth_city','tel'];

}
