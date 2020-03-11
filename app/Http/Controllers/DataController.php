<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Data;

class DataController extends Controller
{
    public function index(){
		return view('data.index');
	}
    public function apex(){
		return view('data.apex');
	}	
	public function add(Request $request){
		$kill = $request->kill;
		$death = $request->death;
		$kd = $kill/$death;
		$param = [
			'name' => $request->name,
			'map' => $request->map,
			'k/d' => $kd,
			'kill' => $request->kill,
			'death' => $request->death,
			'assist' => $request->assist,
			'score' => $request->score,
		];
		DB::table('data')->insert($param);
		return redirect('/data');
	}
	public function apexadd(Request $request){
		$param = [
			'name' => $request->name,
			'legends' => $request->legends,
			'kill' => $request->kill,
			'assist' => $request->assist,
			'score' => $request->score,
		];
		DB::table('apex')->insert($param);
		return redirect('/apex');
	}	
}
