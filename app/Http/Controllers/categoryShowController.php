<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoryShowController extends Controller
{
       public function index()
    {
        $data = category::all();
        return view('pages.home',compact('data'));
    }
}
