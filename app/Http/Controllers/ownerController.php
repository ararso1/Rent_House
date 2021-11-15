<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\owner;
use Illuminate\Validation\Validator;


class ownerController extends Controller
{
    //
    function index(){
        $data = owner::all();
        return view('/welcome', ['owners'=>$data]);  
    }
    



    public function owner(Request $req){
        
        $owner = new owner();

         $req->validate([
            'photo'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $imageName=time().'_'.$req->name.'.'.$req->photo->getClientOriginalExtension();
        $req->photo->move(public_path('images'),$imageName);
        
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
        $owner->photo=$imageName;
        $owner->save();

        return redirect('/add_property');
        
    }
    
    public function view_property(){
        $data = owner::all();
        return view('/view_property', ['owners'=>$data]);
    }
    function delete($id){
        $data = owner::find($id);
        $data->delete();
        return redirect('view_property');
    }

}
