<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function index()
    {
    	if (Auth::check()) {

    		$this->data['title'] = 'Dashboard';
    		return view('dashboard', $this->data);
    	} else {
		    return redirect()->action('AuthController@login');
    	}
    }

}
