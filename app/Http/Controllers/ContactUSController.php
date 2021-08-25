<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;

class ContactUSController extends Controller
{
    public function contacts(Request $request)
    {
       //dd($request->all());
        
       return view('pages/contacts');
    }   

    public function storeContactInfo(ContactUsRequest $request)
    {
      $contactsData = $request -> validated();
      //dd($request -> validated());
    
      return redirect('/contacts');

    }    
}
