<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {

        $dataContact = Contact::all();

        return view('pages.index', compact('dataContact'));
    }

    public function createContact() {
        return view('backoffice.contactBack.createContact');
    }

    public function editContact(Contact $id) {
        $dataContact= $id;
        return view('backoffice.contactBack.editContact', compact('dataContact'));
    }

    public function showContact(Contact $id) {
        $dataContact = $id;
        return view('backoffice.contactBack.showContact', compact('showContact'));
    } 

    public function storeContact(Request $request){
        request()->validate([
            "locationDesc"=>["required", "min:1", "max:40"],
            "emailDesc"=>["required", "min:1", "max:100"],
            "callDesc"=>["required", "min:1", "max:40"],
            "sourceIframe"=>["required", "min:1", "max:40"]
        ]);
        $newEntry = new Contact;
        $newEntry->locationDesc = $request->locationDesc;
        $newEntry->emailDesc = $request->emailDesc;
        $newEntry->callDesc = $request->callDesc;
        $newEntry->sourceIframe = $request->sourceIframe;
        $newEntry->save();
        return redirect()->back();
    }
     
    public function destroyContact($id) {
        $data = Contact::find($id);
        $data->delete();
        return redirect('/');
    }
    
    public function updateContact(Contact $id, Request $request){
        request()->validate([
            "locationDesc"=>["required", "min:1", "max:40"],
            "emailDesc"=>["required", "min:1", "max:100"],
            "callDesc"=>["required", "min:1", "max:40"],
            "sourceIframe"=>["required", "min:1", "max:40"]
        ]);
        $newEntry = new Contact;
        $newEntry->locationDesc = $request->locationDesc;
        $newEntry->emailDesc = $request->emailDesc;
        $newEntry->callDesc = $request->callDesc;
        $newEntry->sourceIframe = $request->sourceIframe;
        $newEntry->save();
        return redirect()->back();
    }
    
    
}
