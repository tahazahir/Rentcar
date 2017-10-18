<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConductorsController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function store(Request $request){
		Conductor::create($request->all());
		if($request->ajax()){
			return response()->json();
		}
		return redirect(url('dashboard/contrats'));
	}

}
