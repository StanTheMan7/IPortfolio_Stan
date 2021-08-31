<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index(){
        $titleDesc = Title::all();
        return view('pages.index' , compact('titleDesc'));
    }
    public function edit(Title $id) {
        $titleDesc = $id;
        return view('backoffice.tBack.editTitle', compact('titleDesc'));
    }
    public function updateTitle(Title $id, Request $request){
        request()->validate([
            "title"=>["required", "min:1", "max:100"],
            "description"=>["required", "min:1", "max:100"]
        ]);
        $newEntry = new Title();
        $newEntry->title = $request->title;
        $newEntry->description = $request->description;
        $newEntry->save();
        return redirect()->back();
    }
}
