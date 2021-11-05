<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tenant;

class registercontroller extends Controller
{
    function register(Request $req){
        $tenant = new tenant();
        $tenant->Fname = $req->Fname;
        $tenant->Mname = $req->Mname;
        $tenant->Lname = $req->Lname;
        $tenant->email = $req->email;
        $tenant->password = $req->password;
        $tenant->con_password = $req->con_password;
        $tenant->phone = $req->phone;
        $tenant->address = $req->address;
        $tenant->type_of_id = $req->type_of_id;
        $tenant->file = $req->file;
        $tenant->save();
        
        return redirect('login');
    }
}
 