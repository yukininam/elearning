<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
	public function index()
	{
		if (Auth::check() && Auth::user()->usertype_id == 1) {
			$this->data['title'] = 'Admin';
			$this->data['title_admin'] = 'Admin';
			$this->data['users'] = User::all();
			return view('admin.list', $this->data);
		} else {
			return redirect()->action('DashboardController@index');
		}
	}
    //
	public function indexTeachers()
	{
		if (Auth::check() && Auth::user()->usertype_id == 1) {
			$this->data['title'] = 'Teachers';
			return view('admin.teachers.list', $this->data);
		} else {
			return redirect()->action('DashboardController@index');
		}
	}
}
