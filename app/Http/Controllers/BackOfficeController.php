<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Porfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function indexBO(){
        $dataAbout = About::all();

        $dataSkills = Skill::all();

        $dataPortfolio = Porfolio::all();

        $dataContact = Contact::all();
        return view('pages.indexBO' , compact('dataAbout' , 'dataSkills', 'dataPortfolio', 'dataContact'));
    }
}
