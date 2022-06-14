<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class postAdminController extends Controller
{
        public function index()
    {
        
        $posts = Post::all();
    
        return view('admin.post', compact('posts'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.create');
    // }
    
    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    // 	$request->validate([
    //         'title'=>'required',
    //         'body'=>'required',
    //     ]);
       
    //     $input = $request->all();
       
    //     Post::create($input);
    
    //     return redirect()->route('postAdmin.index');
    // }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$post = Post::find($id);
        return view('admin.post', compact('post'));
    }
     public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.editPost') -> with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $post = Post::find($id);
        $post->title=$request->title;
        $post->body=$request->body;
        $post->active=$request->active;
        $post->save();
        return redirect('post')->with('flash_message', 'post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $m = Post::find($post);
        $m->delete();
        return redirect()->back()->with('status', 'post Deleted Successfully');
    }

}
