<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;
use App\Conductor;
use Input;
use DB;

class TestController extends Controller {

	public function index(){
		$conductor_id = Conductor::select(DB::raw('max(id)'))->get();
		$conductor_id = preg_replace( '/[^0-9]/', '', $conductor_id );
		return view('test',compact('conductor_id'));
	}

	public function store(Request $request){
		Test::create($request->all());
		if($request->ajax()){
			return response()->json('a');
		}
		return redirect(url('test'));
	}

	public function autocomplete(Request $request){	
		if ($request->ajax())
      {
        $tests = Test::where(function($query) use ($request) {
        	if (($term = $request->get('term'))) {
              $query->orWhere('name', 'like', '%' . $term . '%');
          }
          })->take(5)->get();

        // convert to json
          $results = [];
        foreach ($tests as $test) {
          $results[] = ['id' => $test->id, 'value' => $test->name];
        }
        return response()->json($results);
      }
	}
}
