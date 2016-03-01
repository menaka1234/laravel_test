<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB;

class test extends Controller {

	
	public function admin_details(Request $request)
	{
		$data = DB : select("select * from Recruitment");
		return view('workingplan')
			->with('data',$data);
		
	}

	
}
