<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

      // Show all listings
      public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(6)
        ]);
    }

    //Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    //Show Create Form
    public function create(){
        return view('listings.create');
    }
    //Store Listing Data
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'seller'=>'required',
            'tags'=>'required',
            'location'=>'required',
            'website'=>'required',
            'email'=>['required', 'email'],
            'description'=>'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request ->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);
        
        return redirect('/')->with('message', 'Posted successfully!');
    }
}
