<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Services\Mail\ContactUsMailer;
use Illuminate\Http\Request;
//use Illuminate\Mail\Message;

class ContactUSController extends Controller
{
    public function contacts(Request $request)
    {
        
       return view('pages/contacts');
    }   

    public function storeContactInfo(ContactUsRequest $request, ContactUsMailer $mailer)
    {
      $data = $request -> validated();
      $mailer->send($data);

      return redirect(route('contactUs.show'))->withInput($data);

    }    
}
