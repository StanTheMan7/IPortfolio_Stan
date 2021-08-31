<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Porfolio;
use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $dataAbout = About::all();

        $dataSkills = Skill::all();

        $dataPortfolio = Porfolio::all();

        $dataContact = Contact::all();

        return view('pages.index', compact('dataAbout', 'dataSkills', 'dataPortfolio', 'dataContact'));
    }
}
