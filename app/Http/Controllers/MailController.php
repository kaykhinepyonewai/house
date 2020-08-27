<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function mail($email)
   {
    // dd($email);
   	$to_name = 'kaykhinepyonewai13@gmail.com';
   	$to_email = $email;
	
   	Mail::send([],[],function($message) use ($to_name, $to_email) {
   		$message->to($to_email, $to_name)
   		->subject('Rental Property Sucessful Message');
   		$message->from('kaykhinepyonewai13@gmail.com','Test Mail');
   		$message->setBody('Your Request for Rent My House is sucessful, Thanks U. As Soon, Will Contact U');
		
	});

     return redirect()->route('rentallists.index');

	// return view('backend.mail');

	}

   public function rejectmail($email)
   {
    // dd($email);
    $to_name = 'kaykhinepyonewai13@gmail.com';
    $to_email = $email;
  
    Mail::send([],[],function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
      ->subject('Rental Property Rejected Message');
      $message->from('kaykhinepyonewai13@gmail.com','Test Mail');
      $message->setBody('Your Request for Rent My House is Rejected, Sorry');
    
  });

     return redirect()->route('rentallists.index');

  // return view('backend.mail');

  }


  public function approvepropertymail($email)
   {
    // dd($email);
    $to_name = 'kaykhinepyonewai13@gmail.com';
    $to_email = $email;
  
    Mail::send([],[],function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
      ->subject('Property Request is Approved By Admin');
      $message->from('kaykhinepyonewai13@gmail.com','Test Mail');
      $message->setBody('Your Property Request for Rent  is Approved, Congrulation');
    
  });

     return redirect()->route('waiting');

  // return view('backend.mail');

  }


  public function rejectpropertymail($email)
   {
    // dd($email);
    $to_name = 'kaykhinepyonewai13@gmail.com';
    $to_email = $email;
  
    Mail::send([],[],function($message) use ($to_name, $to_email) {
      $message->to($to_email, $to_name)
      ->subject('Property Request is Rejected By Admin');
      $message->from('kaykhinepyonewai13@gmail.com','Test Mail');
      $message->setBody('Your Property Rejuest for Rent  is Rejected, Your Post is wrong Our Rules. Sorry. Please,Try Again to Post.');
    
  });

     return redirect()->route('waiting');

  // return view('backend.mail');

  }


}
