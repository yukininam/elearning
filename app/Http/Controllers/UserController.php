<?php

namespace App\Http\Controllers;


use Request;
use Response;
use Input;
use View;
use Carbon;
use DB;
use Auth;
use Hash;

use Validator;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
	public function addUser()
	{
		if (Auth::check() && Auth::user()->usertype == "Admin") {
			$this->data['title'] = 'Add User';
			return view('add-user', $this->data);
		} else {
			return redirect()->action('DashboardController@index');
		}
	}
    //
	public function viewUser()
	{
		if (Auth::check() && Auth::user()->usertype == "Admin") {
			$this->data['title'] = 'View User';
			$this->data['users'] = User::all();
			return view('view-user', $this->data);
		} else {
			return redirect()->action('DashboardController@index');
		}
	}

    //
	public function saveUser()
	{
		$rules = array(
			'firstname' => 'required|min:2|max:100',
			'lastname' => 'required|min:2|max:100',
			'middlename' => 'required|min:2|max:100',
			'gender' => 'required|min:2|max:100',
			'birthdate' => 'required|date',
			'address' => 'required|min:2|max:100',
			'contact_no' => 'required|min:2|max:100',
			'email' => 'required|email|unique:users,email',
			'usertype' => 'required|min:2|max:100',
			'username' => 'required|min:2|max:15|alpha_dash|unique:users,username',
			'password' => 'required|min:6|confirmed',
			);

      	// field name overrides
		$names = array(
			'name' => 'full name'
		);

      	// do validation
		$validator = Validator::make(Request::all(), $rules);
		$validator->setAttributeNames($names); 

      	// return errors
		if($validator->fails()) {
			return Response::json(['error' => array_unique($validator->errors()->all())]);
		}

		$row = new User;
		$row->firstname = strip_tags(Request::input('firstname'));
		$row->lastname = strip_tags(Request::input('lastname'));
		$row->middlename = strip_tags(Request::input('middlename'));
		$row->gender = strip_tags(Request::input('gender'));
        $row->birthdate = Carbon::createFromFormat('m/d/Y', Request::input('birthdate'));
		$row->address = strip_tags(Request::input('address'));
		$row->contact_no = strip_tags(Request::input('contact_no'));
		$row->email = Request::input('email');
		$row->username = Request::input('username');
		$row->usertype = Request::input('usertype');
		$row->password = Hash::make(Request::input('password'));
		

      	// save model
		$row->save();

      	// return
		return Response::json(['body' => 'Changes have been saved.']);
	}

}
