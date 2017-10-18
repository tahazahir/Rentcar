<?php 
namespace App\Http\Controllers;
use App\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;

class ClientsController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	public function index(){
		$clients = Client::all();
		return view('admin.dashboard.production.clients.clients',compact('clients'));
	}

	public function create(){
		return view('admin.dashboard.production.clients.create');
	}

	public function store(Request $request){
		Client::create($request->all());
		if($request->ajax()){
			return response()->json('a');
		}
		return redirect(url('dashboard/clients'));
	}

	public function edit($id){
		$client = Client::find($id);
		return view('admin.dashboard.production.clients.edit',compact('client'));
	}

	public function editc($id,Request $request){
		$client = Client::find($id);
		$client->update($request->all());
		return redirect(url('dashboard/clients'));
	}

	public function destroy($id){
		$client = Client::find($id);
		$client->delete();
		return redirect(url('dashboard/clients'));
	}

	public function autocomplete(Request $request){	
		if ($request->ajax())
      {
        $clients = Client::where(function($query) use ($request) {
        	if (($term = $request->get('term'))) {
              $query->orWhere('firstname', 'like', '%' . $term . '%');
              $query->orWhere('lastname', 'like', '%' . $term . '%');
              $query->orWhere('cin', 'like', '%' . $term . '%');
          }
          })->take(5)->get();

        // convert to json
          $results = [];
        foreach ($clients as $client) {
          $results[] = ['id' => $client->id, 'value' => $client->lastname.' '.$client->firstname.','.$client->cin];
        }
        return response()->json($results);
      }
	}
}
