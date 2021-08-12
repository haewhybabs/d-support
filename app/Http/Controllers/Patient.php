<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user_model;
use Mail;
use Hash;

class Patient extends Controller
{

    function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){

    }

    public function addPatient(){

        return view('pages.add_patient');
    }

    public function addPatientAction(Request $request){


        $length=10;
        $password= $request->input('password');
        $email=$request->input('email');
        $username=$request->input('username');

        if(trim($email==null) || trim($username==null)){
            $request->session()->flash('error', 'Email or Username cannot be empty');
            return redirect('add_patient');
        }

        $data=array(

            'email'=>$email,
            'password'=>Hash::make($password),
            'role_ID'=>3,
            'username'=>$username,
        );



        $to_name =$username;
        $to_email =$email;
        $data_mail = array('name'=>$username, 'password'=> $password);

        //Audit Tray
        user_model::insert($data);
        $request->session()->flash('message', $request->input('username'). ' is successfully created.');
        return redirect('add_patient');

    }

    public function generateRandomString($length)
    {

        return substr(sha1(rand()), 0, $length);
    }


}
