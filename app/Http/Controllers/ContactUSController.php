<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

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
      
      $callback=function($input='')
      {
        return $input . 'text';
      };
     
      //dd($request -> validated());
   
    \Log::debug($callback(),$request->all());
  
   \Log::info($callback('Validated'),$request->validated());

   \Mail::raw(
     'Test emails that is used to see data in Mailhog',
     function(Message $message){
$message->to('test@test.com');
     }
   );
      return redirect(route('contactUs.show'));

    }    
}
