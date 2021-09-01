<?php

namespace App\Http\Controllers;

use App\Models\Porfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index() {

        $dataPortfolio = Porfolio::all();

        return view('pages.index', compact( 'dataPortfolio'));
    }

    public function createPortfolio() {
        return view('backoffice.portfolioBack.createPortfolio');
    }
    
    public function editPortfolio(Porfolio $id) {
        $dataPortfolio = $id;
        return view('backoffice.portfolioBack.editPortfolio', compact('dataPortfolio'));
    }

    public function showPortfolio(Porfolio $id) {
        $dataPortfolio = $id;
        return view('backoffice.portfolioBack.showPortfolio', compact('dataPortfolio'));
    }

    public function storePortfolio(Request $request){
        request()->validate([
            "image"=>["required", "min:1", "max:100"],
        ]);
        $newEntry = new Porfolio;
        $newEntry->image = $request->image;
        $newEntry->save();
        return redirect()->back();
    }
    
    public function destroyPortfolio($id) {
        $data = Porfolio::find($id);
        $data->delete();
        return redirect('/');
    }
    public function updatePortfolio(Porfolio $id , Request $request){
        request()->validate([
            "image"=>["required", "min:1", "max:100"],
        ]);
        $newEntry = new Porfolio;
        $newEntry->image = $request->image;
        $newEntry->save();
        return redirect()->back();
    }
    
    
}
