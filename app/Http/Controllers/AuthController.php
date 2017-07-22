<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login() {
        if (!Auth::check()) {
            $this->data['title'] = "Login";
            return view('auth.login', $this->data);
        }
        else {
            // if user is already logged in
            return redirect()->intended();
        }

    }

    public function doLogin(Request $request) {

        $username = $request->input('username');
        $password = $request->input('password');
        $remember = (bool) $request->input('remember');
        $honeypot = $request->input('honeypot');

        if($honeypot) {
            // robot detected
            $error = trans('validation.blank');
        } 
        else if(Auth::attempt(['username' => $username, 'password' => $password, 'status' => 1], $remember)) {
            // login successful
            return redirect()->intended();
        }
        else if(Auth::validate(['username' => $username, 'password' => $password])) {
            if($user->status == 0) {
                // user is not active
                $error = "This account is currently inactive.";
            }
        }
        else {
            // invalid login
            $error = 'Invalid username or password.';
        }
        // return error
        return redirect()->action('AuthController@login')
                       //->withInput($request->except('password'))
                       ->with('notice', array(
                            'msg' => $error,
                            'type' => 'danger'
                       ));
    }
    
    public function logout() {
        Auth::logout();
        
        $error = 'You are now logged out.';
        
        return redirect()->action('AuthController@login')
                       //->withInput($request->except('password'))
                       ->with('notice', array(
                            'msg' => $error,
                            'type' => 'success'
                       ));;
    }
}
