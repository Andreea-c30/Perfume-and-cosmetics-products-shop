<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Rules;
use Mail;
class ContactUSController extends Controller
{
    public function contacts(Request $request)
    {
       //dd($request->all());
        
       return view('pages/contacts');
    }   

    public function storeContactInfo(ContactUsRequest $request)
    {
      $data = $request -> validated();
      $data['messageText']=$data['message'];
      $callback=function($input='')
      {
        return $input . 'text';
      };
     
      //dd($request -> validated());
  
    //\Log::debug($callback(),$request->all());
  
   //\Log::info($callback('Validated'),$request->validated());

   Mail::send(
     'emails/contactUs',
     $data,
     function(Message $message)use($data){
$message->to('test@test.com');
$message->subject('Contact us request form '. $data['name'].' '.$data['email']);
$message->replyTo($data['email']);
     }
   );
      return redirect(route('contactUs.show'));

    }    
}
