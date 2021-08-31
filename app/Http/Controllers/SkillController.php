<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index() {
        $dataSkills = Skill::all();
        return view('pages.index', compact( 'dataSkills'));
    }

    public function createSkill() {
        return view('backoffice.skillBack.createSkill');
    }

    public function editSkill(Skill $id) {
        $dataSkills= $id;
        return view('backoffice.skillBack.editSkill', compact('dataSkills'));
    }
    
    public function showSkill(Skill $id) {
        $dataSkills = $id;
        return view('backoffice.skillBack.showSkill', compact('showSkill'));
    }

}
