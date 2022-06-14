<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendEmail extends Controller
{
    public function store(Request $r)
    {
    //     if(isset($r->sender)){
    //     Mail::send(['text'=>'mail'], 'sa', function($message) {
    //         $message->to('ahmadkhalaf18000@gmail.com', 'Tutorials Point')->subject
    //            ('Laravel Basic Testing Mail');
    //         $message->from('ahmadkhalaf18000@gmail.com','Virat Gandhi');
    //      });}
        if(isset($r->sender)){
           $recipient ="ahmadkhalaf18000@gmail.com";

           $subject = "Approval from mentorHub";

           $message ='Hi mentor,we reviwed candidate application 
           with your course,here is candidate info<br>'.'Candidate name:'. $r->userName.
           ' Candidate email:'. $r->userEmail. ' Age:'. $r->userAge. ' Education:'. $r->userEducation.' Thanks';

           $sender = "From: ahmadkhalaf18000@gmail.com";

           mail($recipient, $subject, $message, $sender);
        }
       
        return redirect('/app')->with('message','Email was sent to mentor' );

    }
    
}
