<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;

class TestimonialController extends Controller
    {   function loadView(){
        return view('Showcase',['data'=>Testimonial::all()]);
    }

   

    function store(Request $request){
        $data=$request->validate([
            'name'=>'required|max:50',
            'surname'=>'required|max:50',
            'designation'=>'required|max:25',
            'rating'=>'required',
            'message'=>'required|max:1024',
            'message_title'=>'required|max:50',
            'file'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:max_width=1000,max_height=1000'
        ]);
        $request->file->store('public/img');
        $post=new Testimonial([
            'name'=>$request->get('name'),
            'surname'=>$request->get('surname'),
            'position'=>$request->get('designation'),
            'rating'=>$request->get('rating'),
            'experience_title'=>$request->get('message_title'),
            'experience_details'=>$request->get('message'),
            'imagepath'=>$request->file->hashName(),
        ]);
        
        $post->save();
        return redirect('/')->with('success','Testimonial Added');
    }
}
