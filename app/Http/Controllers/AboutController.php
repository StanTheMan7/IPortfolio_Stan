<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $dataAbout = About::all();
        return view('pages.index' , compact('dataAbout'));
    }
    
    public function createAbout() {
        return view('backoffice.aboutBack.createAbout');
    }

    public function editAbout(About $id) {
        $dataAbout = $id;
        return view('backoffice.aboutBack.editAbout', compact('dataAbout'));
    }

    public function showAbout(About $id) {
        $dataAbout = $id;
        return view('backoffice.aboutBack.showAbout', compact('dataAbout'));
    }
    
    public function storeAbout(Request $request){
        request()->validate([
            "birthday"=>["required", "min:1", "max:40"],
            "website"=>["required", "min:1", "max:100"],
            "phone"=>["required", "min:1", "max:40"],
            "city"=>["required", "min:1", "max:40"],
            "age"=>["required", "min:1", "max:100"],
            "degree"=>["required", "min:1", "max:40"],
            "email"=>["required", "min:1", "max:40"],
            "freelance"=>["required", "min:1", "max:40"],
            "description"=>["required", "min:1", "max:40"],
        ]);
        $newEntry = new About;
        $newEntry->birthday = $request->birthday;
        $newEntry->website = $request->website;
        $newEntry->phone = $request->phone;
        $newEntry->city = $request->city;
        $newEntry->age = $request->age;
        $newEntry->degree = $request->degree;
        $newEntry->email = $request->email;
        $newEntry->freelance = $request->freelance;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->back();
    }
    
    public function destroyAbout($id) {
        $data = About::find($id);
        $data->delete();
        return redirect('/');
    }
    
    public function updateAbout(About $id ,Request $request){
        request()->validate([
            "birthday"=>["required", "min:1", "max:40"],
            "website"=>["required", "min:1", "max:100"],
            "phone"=>["required", "min:1", "max:40"],
            "city"=>["required", "min:1", "max:40"],
            "age"=>["required", "min:1", "max:100"],
            "degree"=>["required", "min:1", "max:40"],
            "email"=>["required", "min:1", "max:40"],
            "freelance"=>["required", "min:1", "max:40"],
            "description"=>["required", "min:1", "max:40"],
        ]);
        $newEntry = new About;
        $newEntry->birthday = $request->birthday;
        $newEntry->website = $request->website;
        $newEntry->phone = $request->phone;
        $newEntry->city = $request->city;
        $newEntry->age = $request->age;
        $newEntry->degree = $request->degree;
        $newEntry->email = $request->email;
        $newEntry->freelance = $request->freelance;
        $newEntry->description = $request->description;
        $newEntry->save();

        return redirect()->route('index');
     }
}
