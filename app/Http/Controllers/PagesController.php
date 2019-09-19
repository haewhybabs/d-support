<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class PagesController extends Controller
{
    public function index()
    {
       return $this->login();
    }

    public function login(){

        if(Auth::check()){
            return redirect('dashboard');
        }

        return view('pages.login');
    }

    public function redirectDashboard(){

        return redirect('dashboard');

    }


}
