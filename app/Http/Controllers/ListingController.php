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

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);
        
        return redirect('/')->with('message', 'Posted successfully!');
    }

    public function edit(Listing $listing) {
        return view('listings.edit', ['listing'=>$listing]);
    }   

    //Update Listing Data
    public function update(Request $request, Listing $listing){
        
        //Make sure loggedIn in user is owner
        if($listing->user_id !=auth()->id()){
            abort('403', 'Unauthorized action!');
        }

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

        $listing->update($formFields);
        
        return redirect('/')->with('message', 'Updated successfully!');
    }

    //Delete Post
    public function destroy(Listing $listing){
        //Make sure loggedIn in user is owner
        if($listing->user_id !=auth()->id()){
            abort('403', 'Unauthorized action!');
        }
        
        $listing->delete();
        return redirect('/')->with('message', 'Post deleted successfully!');
    }
    // Manage Listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }

}