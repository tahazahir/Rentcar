<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Car;
use Illuminate\Http\Request;
use DB;

class CarsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth');
	}
	public function upload(Request $request){
			$file = $request->file('file1');
			echo 'File name : '.$file->getClientOriginalName();
			echo 'Uploaded';
			$file->move('uploads',$file->getClientOriginalName());
	}
	public function index()
	{
		$cars = Car::all();
		return view('admin.dashboard.production.cars.index',compact('cars'));
	}

	public function create(){
		return view('admin.dashboard.production.cars.create');
	}

	public function edit($id){
		$car = Car::find($id);
		return view('admin.dashboard.production.cars.edit',compact('car'));
	}

	public function store(Request $request){
		Car::create($request->all());
		if($request->file('file1') == null){
			$car_id = Car::select(DB::raw('max(id)'))->get();
			$car_id = preg_replace( '/[^0-9]/', '', $car_id);
			$car = Car::find($car_id);
			$pic = url('/uploads');
			$pic = $pic.'/noimage.png';
			$car->picture = $pic;
			$car->save();
			return redirect(url('dashboard/cars'));
		}
		else
		{
			$file = $request->file('file1');
			$picture=$request->immatricule;
			$picture = str_replace('/', '', $picture);
			$picture=$picture.'.jpg';
			$file->move('uploads',$picture);
			$car_id = Car::select(DB::raw('max(id)'))->get();
			$car_id = preg_replace( '/[^0-9]/', '', $car_id);
			$car = Car::find($car_id);
			$pic = url('/uploads');
			$pic = $pic.'/'.$picture;
			$car->picture = $pic;
			$car->save();
			return redirect(url('dashboard/cars'));
		}
	}

	public function editc($id,Request $request){
		$car = Car::find($id);
		$car->marque = $request->marque;
		$car->model = $request->model;
		$car->carburant = $request->carburant;
		$car->transformation = $request->transformation;
		$car->circulation_date = $request->circulation_date;
		$car->visible = $request->visible;
		$car->gps = $request->gps;
		$car->promotion = $request->promotion;
		$car->immatricule = $request->immatricule;
		$car->color = $request->color;
		$car->price = $request->price;
		$car->km = $request->km;
		$car->rent_price = $request->rent_price;
		$car->clim = $request->clim;
		$car->etat = $request->etat;
		if($request->file('file1') == null){
			$pic = url('/uploads');
			$pic = $pic.'/noimage.png';
			$car->picture = $pic;
		}
		else
		{
			$file = $request->file('file1');
			$picture=$request->immatricule;
			$picture = str_replace('/', '', $picture);
			$picture=$picture.'.jpg';
			$file->move('uploads',$picture);
			$pic = url('/uploads');
			$pic = $pic.'/'.$picture;
			$car->picture = $pic;
		}
		$car->save();
		return redirect(url('dashboard/cars'));
	}

	public function destroy($id){
		$car = Car::find($id);
		$car->delete();
		return redirect(url('dashboard/cars'));
	}

	public function autocomplete(Request $request){	
		if ($request->ajax())
      {
        $cars = Car::where(function($query) use ($request) {
        	if (($term = $request->get('term'))) {
              $query->orWhere('marque', 'like', '%' . $term . '%');
              $query->orWhere('model', 'like', '%' . $term . '%');
              $query->orWhere('immatricule', 'like', '%' . $term . '%');
          }
          })->take(5)->get();

        // convert to json
          $results = [];
        foreach ($cars as $car) {
          $results[] = ['id' => $car->id, 'value' => $car->marque.' '.$car->model.','.$car->immatricule];
        }
        return response()->json($results);
      }
	}
}
