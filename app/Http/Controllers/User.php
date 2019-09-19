<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Hash;
use App\User as user_model;
use Illuminate\Support\Facades\Auth;


class User extends Controller
{
    public function index(){

    }

    public function login(Request $request){

        $validator=Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return redirect('login')->withErrors($validator)->withInput();
        }

        $UserInput=array(
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        );

        return $this->authenticate($UserInput,$request);

    }

    public function authenticate($userInput,$request){

        if(Auth::attempt($userInput)){

            return redirect()->intended('dashRole');
        }
        else{

            $request->session()->flash('error', 'Invalid Email or Password');
            return redirect('login');
        }

        $task="Logged In";
        $this->audit($task);



    }

    public function logout(){
        $task="Logged Out";
        $this->audit($task);
        Auth::logout();
        return redirect('login');
    }
}
