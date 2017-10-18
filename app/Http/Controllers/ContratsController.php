<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contrat;
use App\Conductor;
use Illuminate\Http\Request;
use DB;

class ContratsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct(){
		$this->middleware('auth');
	}
	
	public function index()
	{
		$contrats = Contrat::all();
		return view('admin.dashboard.production.contrats.index',compact('contrats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.dashboard.production.contrats.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request){
		$conductor = new Conductor();
		$conductor->lastname = $request->lastname;
		$conductor->firstname = $request->firstname;
		$conductor->cin = $request->cin;
		$conductor->adresse = $request->adresse;
		$conductor->tel = $request->tel;
		$conductor->birth_date = $request->birth_date;
		$conductor->permis = $request->permis;
		$conductor->passport = $request->passport;
		$conductor->email = $request->email;
		$conductor->city = $request->city;
		$conductor->birth_city = $request->birth_city;
		$conductor->save();
		$conductor_id = Conductor::select(DB::raw('max(id)'))->get();
		$conductor_id = preg_replace( '/[^0-9]/', '', $conductor_id );
		$contrat = new Contrat();
		$contrat->client_id = $request->client_id;
		$contrat->car_id = $request->car_id;
		$contrat->conductor_id = $conductor_id; 
		$contrat->depart_date = $request->depart_date;
		$contrat->depart_hour = $request->depart_hour;
		$contrat->return_date = $request->return_date;
		$contrat->return_hour = $request->return_hour;
		$contrat->depart_place = $request->depart_place;
		$contrat->return_place = $request->return_place;
		$contrat->price = $request->price;
		$contrat->nbdayrent = $request->nbdayrent;
		$contrat->depart_km = $request->depart_km;
		$contrat->return_km = $request->return_km;
		$contrat->return_etat_comm = $request->return_etat_comm;
		$contrat->depart_etat_comm = $request->depart_etat_comm;
		$contrat->type_caution = $request->type_caution;
		$contrat->num_caution = $request->num_caution;
		$contrat->save();
		return redirect(url('dashboard/contrats'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id){
		$contrat = Contrat::find($id);
		return view('admin.dashboard.production.contrats.edit',compact('contrat'));
	}

	public function editc($id,Request $request){
		$conductor = Conductor::find($request->conductor_id);
			$conductor->lastname = $request->lastname;
			$conductor->firstname = $request->firstname;
			$conductor->cin = $request->cin;
			$conductor->adresse = $request->adresse;
			$conductor->tel = $request->tel;
			$conductor->birth_date = $request->birth_date;
			$conductor->permis = $request->permis;
			$conductor->passport = $request->passport;
			$conductor->email = $request->email;
			$conductor->city = $request->city;
			$conductor->birth_city = $request->birth_city;
			$conductor->save();
			$contrat = Contrat::find($id);
			$contrat->client_id = $request->client_id;
			$contrat->car_id = $request->car_id;
			$contrat->conductor_id = $request->conductor_id; 
			$contrat->depart_date = $request->depart_date;
			$contrat->depart_hour = $request->depart_hour;
			$contrat->return_date = $request->return_date;
			$contrat->return_hour = $request->return_hour;
			$contrat->depart_place = $request->depart_place;
			$contrat->return_place = $request->return_place;
			$contrat->price = $request->price;
			$contrat->nbdayrent = $request->nbdayrent;
			$contrat->depart_km = $request->depart_km;
			$contrat->return_km = $request->return_km;
			$contrat->return_etat_comm = $request->return_etat_comm;
			$contrat->depart_etat_comm = $request->depart_etat_comm;
			$contrat->type_caution = $request->type_caution;
			$contrat->num_caution = $request->num_caution;
			$contrat->save();
		if($request->ajax()){

			return response()->json('a');
		}
		else
		{
			return 0;
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function preview($id)
	{
		$contrat = Contrat::find($id);
		return view('admin.dashboard.production.contrats.ex',compact('contrat'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$contrat = Contrat::find($id);
		$contrat->delete();
		return redirect(url('dashboard/contrats'));
	}

}
