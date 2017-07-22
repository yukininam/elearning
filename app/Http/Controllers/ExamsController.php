<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExamsController extends Controller
{
    public function index() {
    	if (Auth::check()) {
    		$this->data['title'] = 'Exams';
    		return view('exams.list', $this->data);
    	} else {
    		return redirect()->action('AuthController@login');
    	}
    }
}
