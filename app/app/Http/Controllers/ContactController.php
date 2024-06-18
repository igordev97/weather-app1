<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $title = "Contact Us";
        return view('contact',compact('title'));
    }
    public function send(Request $request){
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        ContactModel::create([
            'email'=>$request->get('email'),
            'subject'=>$request->get('subject'),
            'message'=>$request->get('message')
        ]);

        session()->flash('message','Thanks for contact us!');
        return redirect()->back();
    }
}
