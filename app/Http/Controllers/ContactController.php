<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){

        return view('contatti');

    }






    public function newContact(Request $request){



        $name= $request->input('name');

        $motive= $request->input('motive');

        $user = Auth::user();

        $contactMail=new ContactMail($name , $motive, $user);

        Mail::to('military@base.com')->send($contactMail);


return redirect()->route('welcome')->with('message', 'La mail é stata inviata con successo');
}
}
