<?php

namespace App\Http\Controllers;

use App\Models\Poetry;
use Illuminate\Http\Request;

class PoetryController extends Controller
{

   

    public function gallery(){
        $poetries = Poetry::paginate(5);

        
        return view('poetries.gallery',[
            'data' => $poetries

        ]);
    }
    public function indexx(){
        return view('poetries.indexx');
    }
    public function index(){
        return view('poetries.index');
    }


    //
    public function show($id){
        $poetry = Poetry::find($id);
        return  $poetry;
    }
    //
    public function create(){
        return view('poetries.create');
    }
    //
    public function store(Request $request){
        $request -> validate([
            'title' => 'required',
            'piece' => 'required',
            'author' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
     
        Poetry::create($input);
      
        return redirect('/gallery');
   
    }
    //
    
    public function edit(Request $request, $id)
    {
        $poetry = Poetry::find($id);
        return view('poetries.edit', compact('poetry'));
    }

    //
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required'
        ]);
        $poetry = Poetry::find($id);
        $poetry->update([
            'title' => $request->title,
            'piece' => $request->piece,
            'author' => $request->author,
            // 'image'=>$request->image
        ]);
        $input = $request->all();
   
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
           
        $poetry->update($input);
        return redirect('/gallery');
    }
    //
    public function destroy($id){
        $poetry = Poetry::find($id);
        $poetry->delete();
        return redirect('/poetry');
    }
}
