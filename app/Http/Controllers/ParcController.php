<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;
use App\Client;
use App\Reservation;
use Illuminate\Http\Request;
use DB;

class ParcController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cars = Car::where('visible','=','1')->get();
		$marques = Car::select(DB::raw('DISTINCT(marque)'))->where('visible','=','1')->get();
		$marques1 = array();
		$i = 0;
		foreach($marques as $marque){
			$marque = preg_replace('/\{"marque":"/','',$marque);
			$marque = preg_replace('/"\}/','',$marque);
			$marques1[$i]=$marque;
			$i++;
		}
		return view('layouts.parc',compact('cars','marques1'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function filtre(Request $request)
	{
		if($request->ajax()){
			$models = Car::select(DB::raw('DISTINCT(model)'))->where('marque','=',$request->marque)->where('visible','=','1')->get();
			$msg = array();
			$i=0;
			foreach($models as $model){
				$model = preg_replace('/\{"model":"/','',$model);
				$model = preg_replace('/"\}/','',$model);
				$msg[$i]=$model;
				$i++;
			}
			return response()->json($msg);
		}
		return 0;
	}

	public function reservestore(Request $request){
		$client = new Client();
		$client->firstname = $request->firstname; 
      	$client->lastname = $request->lastname; 
      	$client->cin = $request->cin;       	
      	$client->permis = $request->permis;          	
      	$client->passport = $request->passport; 
      	$client->email = $request->email;         	
      	$client->birth_date = $request->birth_date; 
      	$client->tel = $request->tel; 
      	$client->adresse = $request->adresse;           	
      	$client->city = $request->city;         	
      	$client->birth_city = $request->birth_city; 
      	$client->save();
      	$client_id = Client::select(DB::raw('max(id)'))->get();	
      	$client_id = preg_replace( '/[^0-9]/', '', $client_id );
      	$reservation = new Reservation();
      	$reservation->depart_place = $request->depart_place;
      	$reservation->return_place = $request->return_place;
      	$reservation->depart_date = $request->depart_date;
      	$reservation->return_date = $request->return_date;
      	$reservation->depart_hour = $request->depart_hour;
      	$reservation->return_hour = $request->return_hour;
      	$reservation->client_id = $client_id;
      	$reservation->car_id = $request->car_id;
      	$reservation->save();
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function search(Request $request)
	{
		$cars = Car::where('marque','=',$request->marque)->where('model','=',$request->model)->where('carburant','=',$request->carburant)->where('transformation','=',$request->transformation)->get();
		$marques = Car::select(DB::raw('DISTINCT(marque)'))->where('visible','=','1')->get();
		$marques1 = array();
		$i = 0;
		foreach($marques as $marque){
			$marque = preg_replace('/\{"marque":"/','',$marque);
			$marque = preg_replace('/"\}/','',$marque);
			$marques1[$i]=$marque;
			$i++;
		}
		return view('layouts.parc',compact('cars','marques1'));

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function reserve($id)
	{
		$car = Car::find($id);
		return view('layouts.reserve',compact('car'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
