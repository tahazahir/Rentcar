<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reservation;
use App\Client;
use Illuminate\Http\Request;

class ReservationsController extends Controller {


	public function __construct(){
		$this->middleware('auth');
	}
	
	public function index(){
		$reservations = Reservation::all();
		return view('admin.dashboard.production.reservations.index',compact('reservations'));
	}

	public function create(){
		return view('admin.dashboard.production.reservations.create');
	}

	public function edit($id){
		$reservation = Reservation::find($id);
		return view('admin.dashboard.production.reservations.edit',compact('reservation'));
	}


	public function editc($id,Request $request){
		$reservation = Reservation::find($id);
		$reservation->update($request->all());
		if($request->ajax()){
			return response()->json('a');
		}
		else
		{
			return 0;
		}
	}

	public function store(Request $request){
		Reservation::create($request->all());
		if($request->ajax()){
			return response()->json('a');
		}
        return redirect(url('dashboard/reservations'));
	}



	public function destroy($id){
		$reservation = Reservation::find($id);
		$reservation->delete();
		return redirect(url('dashboard/reservations'));
	}

}
