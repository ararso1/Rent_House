<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\owner;

class ownerController extends Controller
{
    //
    function index(){
        $data = owner::all();
        return view('/welcome', ['owners'=>$data]);  
    }
    public function owner(Request $req){
        $owner = new owner();
        
        $owner->state=$req->state;
        $owner->zone=$req->zone;
        $owner->district=$req->district;
        $owner->city=$req->city;
        $owner->sub_city=$req->sub_city;
        $owner->contact=$req->contact;
        $owner->property_type=$req->property_type;
        $owner->house_no=$req->house_no;
        $owner->price=$req->price;
        $owner->rooms=$req->rooms;
        $owner->bed_rooms=$req->bed_rooms;
        $owner->kitchen=$req->kitchen;
        $owner->bathrooms=$req->bathrooms;
        $owner->description=$req->description;
        
        if($req->hasfile('photo')){
            $file=$req->file('photo');
            $extention=$file->getClientOriginalExtention();
            $filenName=time().'.'.$extention;
            $file->photo=$filenName;
        }

        $owner->save();

        return redirect('/add_property');
        

    }
    
    public function view_property(){
        $data = owner::all();
        return view('/view_property', ['owners'=>$data]);
    }

}
