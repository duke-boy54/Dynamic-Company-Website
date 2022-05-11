<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Controllers\AboutController;
use Auth;

class AboutController extends Controller
{
    
    public function AddAbout()
    {
        $abouts = About::all();
        return view ('admin.about.index',compact('abouts'));
    }

    public function CreateAbout()
    {
        return view('admin.about.create');
    }

    public function StoreAbout( Request  $request)
    {
        $abouts = new about;
        $abouts->title = $request->title;
        $abouts->short_desc = $request->short_desc;
        $abouts->long_desc = $request->long_desc;
        $abouts->save();
        return redirect()->route('home.about')->with('success','About is added succesfully');

    }

    public function EditAbout($id)
    {
        $abouts = About::find($id);
        return view('admin.about.edit',compact('abouts'));

    }

    public function UpdateAbout(Request $request , $id)
    {
        $abouts = About::find($id);
        $abouts->title = $request->title;   
        $abouts->short_desc = $request->short_desc;
        $abouts->long_desc = $request->long_desc;
        $abouts->save();
        return redirect()->route('home.about')->with('success','About is updated succesfully');
    }

    public function DeleteAbout($id)
    {
        $abouts = About::find($id);
        $abouts->delete();
        return redirect()->route('home.about')->with('success','About is Deleted succesfully');
    }
}
