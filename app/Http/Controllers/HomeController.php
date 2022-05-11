<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Models\Multipic;
use App\Models\Slider;
use Image;
use Auth;

class HomeController extends Controller
{
    public function HomeSlider()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function AddSlider()
    {
        return view('admin.slider.create');
    }

    public function CreateSlider(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1920,1088)->save('image/slider/'.$name_gen);

        $last_img = 'image/slider/'.$name_gen;

        Slider::insert([
             'title' => $request->title,
             'description' => $request->description,
             'image' => $last_img,
          
        ]);

        return redirect()->route('home.slider')->with('success','Slider is Added Successful');

    }

    public function EditSlider($id)
    {
        $sliders = Slider::find($id);
        return view('admin.slider.edit',compact('sliders'));
    }

    public function UpdateSlider(Request $request, $id)
    {
        // $sliders = Slider::find($id);
        // $sliders->title = $request ->title;
        // $sliders->description = $request ->description;
        // $sliders->save();


        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $image->move($up_location, $img_name);
    
            unlink($old_image);
    
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                // 'created_at' => Carbon::now()
            ]);
    
            return redirect()->back()->with('success','Slider is Updated Successful');

        }else{

            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                // 'created_at' => Carbon::now(),
            ]);
    
            return redirect()->back()->with('success','Slider is Updated Successful');

        }

    }

    public function DeleteSlider($id)
    {
        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect()->back()->with('success','Sliders is deleted successful');
    }
    
}
