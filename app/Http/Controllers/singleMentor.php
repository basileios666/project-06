<?php

namespace App\Http\Controllers;

use App\Mail\ContactMentorMail;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class singleMentor extends Controller
{
    public function index(Request $user)
    {
       $mentor=User::find($user->id);
       return view('pages.mentorSingle',compact('mentor'));
    }


    public function show(User $user)
    {
       $mentor=User::find($user->id);
       return view('pages.mentorSingle',compact('mentor'));
    }


     

}
