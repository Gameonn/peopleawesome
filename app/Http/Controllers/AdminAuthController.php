<?php namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller {


    public function login() {
        $remember_token = Session::get('remember_token');

        if(empty($remember_token)) {

            
            return view('admin.login');
        }else
            return redirect('administrator/dashboard');
        
    }

    public function loginCode() {

        $input = Input::all();
        $login_data =  Admin::login($input);
        
        if($login_data == 1) {
            return redirect('administrator/dashboard');
        }
        else {
            return redirect()->back()->with('message', 'Username or Password do not match');
        }
    }

    public function logout() {
        Session::forget('remember_token');
        return redirect('administrator/login');
    }

}
