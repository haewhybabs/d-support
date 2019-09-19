<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as user_model;
use Mail;
use Hash;

class Therapist extends Controller
{

    function __construct()
    {
        $this->middleware('auth');

    }

    public function index(){

    }

    public function addTherapist(){

        return view('pages.add_therapist');
    }

    public function addTherapistAction(){

    }
}
