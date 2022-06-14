<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\mentor;
use App\Models\mentor_request;
use App\Models\User;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function update(Request $request,$mentor)
    {

        

        $user=User::findOrfail($mentor);
        
        $user->update(['name'=>$request->input('name'),'email'=>$request->input('email'),'password'=> Hash::make($request->input('password')),
        'mentor_category'=>$request->input('mentor_category'),'mentor_about'=>$request->input('mentor_about')]);

        return view('pages.editprofile');
        
   
    }


    public function index()
    {
        $users = User::all();
    return view('pages.show', compact('users')); 
    }
    public function getMentor()
    {
        $user = User::find();
       return view('pages.profile', compact('user')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
       
    }

  
    public function show(User $mentor)
    {
        return view('pages.editprofile',compact('mentor'));
    }

    public function edit(User $mentor)
    {
        return view('pages.profile',compact('mentor'));
    }    
  
  

  
    public function destroy(mentor $mentor)
    {
        $mentor->delete();
        return redirect('home');
    }
}
