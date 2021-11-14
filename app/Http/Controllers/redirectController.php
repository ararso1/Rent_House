<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class redirectController extends Controller
{
    //
    function redirect(){
        $role = Auth::user()->role;
        if($role=='admin'){
            return view('admin.index');
        }
        else if($role=='owner'){
            return view('dashboard');
        }
        else{
            return view('tenants.tenants');
        }
    }   
}
