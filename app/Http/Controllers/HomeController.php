<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='1')
        {
            return view('admin.dashboard');
        }



        if($role=='2')
         {
            return view('admin.pathologist');
         }

        // if($role=='3')
        // {
        //     return view('admin.dashboard');
        // }


        else
        {
            return view('dashboard');
        }
    }
}
