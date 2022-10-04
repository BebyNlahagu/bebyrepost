<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('user.login');
    }

    public function register(){
        return view('user.register');
    }

    public function register_action(Request $request){
        //
    }

    public function home(){
        return view('home');
    }

    public function welcome(){
        return view('welcome');
    }
    public function pricing(){
        return view('pricing');
    }

}
