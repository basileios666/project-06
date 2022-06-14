<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = category::all();
        return view('admin.category',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
        $request->validate(['category_name'=>'min:3|required', 'category_image'=>'mimes:jpg,png|image']);
        $category= new category();
        $category->category_name=$request->category_name;
          $category->category_description=$request->category_description;
        if($request->hasfile('category_image')){
            $file=$request->file('category_image');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/category',$filename);
            $category->category_image=$filename;
        }
        $category->save();
        return redirect() -> route('category.index')->with('flash_message', 'category Added!');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
        $category = category::find($id);
        return view('admin.edit') -> with('categories', $category);
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
        $category = category::find($id);
        if($request->hasfile('category_image')){
            $file=$request->file('category_image');
            $ex=$file->getClientOriginalExtension();
            $filename=time().'.'.$ex;
            $file->move('uploads/category',$filename);
            $category->category_image=$filename;
        }
        $category->category_name=$request->category_name;
         $category->category_description=$request->category_description;
        $category->save();
        return redirect('category')->with('flash_message', 'category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $m = category::find($category);
        $m->delete();
        return redirect()->back()->with('status', 'Category Deleted Successfully');
    }


    // public function delete($id)
    // {
    //    $del=category::find($id);
    //    return view('admin.category',compact('del'));
    //     // return redirect()->back()->with('status', 'Are you sure you want to delete this category? if deleted all mentros under category will be deleted as well!');
    // }



    
}
