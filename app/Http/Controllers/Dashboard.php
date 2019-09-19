<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Dashboard extends Controller
{
    function __construct()
    {
        $this->middleware('auth');

    }
    public function index(){

         /*
        1 Admin
        2 Therapist
        3 Patient
        */
        $role=Auth::user()->role_ID;

        if($role==3){

            return view('pages.patient_dashboard');
        }
        elseif($role==2){

            return view('pages.therapist_dashboard');
        }

        elseif($role==1){

            return view('pages.admin_dashboard');

        }

    }

}
