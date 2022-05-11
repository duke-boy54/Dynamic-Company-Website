<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;
use Auth;
use Illuminate\Support\Carbon;
use Image;


class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function AllBrand()
    {
        $brands = Brand::latest()->paginate(4);
        return view('admin.brand.index',compact('brands'));
    }

    public function StoreBrand(Request $request)
    {
        // validating user input
        $validateData = $request->validate([
            'brand_name'=> 'required|unique:brands|min:4',
            'brand_image' => 'required|mimes:jpeg,jpg,png',
        ],

        [
            'brand_name.required' => 'Please brands must have a unique name',
            'brand_name.min' => 'Brand name must be longer than 4 Characters',
            'brand_image.required' => 'Please select an Image',
        ]);

       
        //  $brand_image = $request->file('brand_image');
        //  $name_gen = hexdec(uniqid());
        //  $img_ext = strtolower($brand_image->getClientOriginalExtension());
        //  $img_name = $name_gen.'.'.$img_ext;
        //  $up_location = 'image/brand/';
        //  $last_img = $up_location.$img_name;
        //  $brand_image->move($up_location, $img_name);

        //  Or Inserting Image through Image Intervention package
        $brand_image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300,200)->save('image/brand/'.$name_gen);

        $last_img = 'image/brand/'.$name_gen;

        Brand::insert([
             'brand_name' => $request->brand_name,
             'brand_image' => $last_img,
             'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success','Brands is Added Successful');

        // $brands = new Brand;
        // $brands->brand_name = $request->brand_name;
        // $brands->brand_image = $request->$last_img;
        // $brands->created_at = $request->created_at;
        // $brands->save();
        // return redirect()->back()->with('success','Brands is Added Successful');
    }

    public function EditBrand($id)
    {
        $brands = Brand::find($id);
        return view('admin.brand.edit',compact('brands'));
    }

    public function UpdateBrand(Request $request, $id)
    {
        $validateData = $request->validate([
            'brand_name'=> 'required|min:4',

        ],

        [
            'brand_name.required' => 'Please brands must have a unique name',
            'brand_name.min' => 'Brand name must be longer than 4 Characters',
            
        ]);

        $old_image = $request->old_image;

        $brand_image = $request->file('brand_image');

        if($brand_image){

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image->move($up_location, $img_name);
    
            unlink($old_image);
    
            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);
    
            return redirect()->back()->with('success','Brands is Updated Successful');

        }else{

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                // 'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);
    
            return redirect()->back()->with('success','Brand Name is Updated Successful');

        }

    }

    
    public function DeleteBrand($id)
    {
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

      $brands = Brand::find($id);
      $brands->delete();
      return redirect()->back()->with('success','Brand is deleted Successful');
       
    }

    // Multi image all method 
    public function Multpic()
    {
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }

    public function StorePic(Request $request)
    {
        $image = $request->file('image');

        foreach($image as $multi_img){

        $name_gen = hexdec(uniqid()).'.'.$multi_img->getClientOriginalExtension();
        Image::make($multi_img)->resize(300,300)->save('image/multipic/'.$name_gen);

        $last_img = 'image/multipic/'.$name_gen;

        Multipic::insert([
             
             'image' => $last_img,
             'created_at' => Carbon::now()
        ]);
         }
        return redirect()->back()->with('success','Multiple images added successfully');

    }

    public function DeletePic($id)
    {
        $img = Multipic::find($id);
        $old_image = $img->image;
        unlink($old_image);

      $multipics = Multipic::find($id);
      $multipics->delete();
      return redirect()->back()->with('success','Portfolio is deleted Successful');
    }

    public function Logout()
    {
        Auth::logout();
       
        return redirect()->route('login')->with('succcess','User Logged Out successful');
    }
}
