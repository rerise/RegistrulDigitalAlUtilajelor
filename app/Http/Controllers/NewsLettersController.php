<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsLettersController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsletters = Newsletter::all();
        return view('newsletters.list', compact('newsletters'));
    }

     /**
     * Store a newly created email for newsletter in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required',
        ]);

        $newsletter = new Newsletter($request->except(["_method", "_token"]));
        $newsletter->save();


        // $request->session()->flash('alert-success', 'Mulţumim! Email-ul a fost salvate');
        // TODO: ajax;
        flash()->success('Email adaugat cu succes!'); 


      	return redirect()->back();
        // return redirect()->back()->with('success', 'Mulţumim! Datele au fost salvate');   
   }

   public function storeAjax(Request $request) 
   {
        $request->validate([
            'email'=>'required|email',
        ]);

        $newsletter = new Newsletter($request->except(["_method", "_token"]));
        $newsletter->save();
    
        $msg = "Mail salvat cu succes. Mulţumim!";
        return response()->json(array('msg'=> $msg), 200);
   }
}
