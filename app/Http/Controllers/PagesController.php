<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use App\models\Brand;
use App\Models\About;
use App\Models\Multipic;
use Image;
use Auth;


class PagesController extends Controller
{
    //

    public function ShowBlog()
    {
        return view('admin.page.blog');
    }

    public function ShowHome()
    {
        // $abouts = About::all();
        // return view('home',compact('abouts'));

    $brands = Brand::all();
    $abouts = DB::table('abouts')->first();
    return view('home',compact('brands','abouts'));
    }

    public function ShowContact()
    {
        return view('admin.page.contact');
    }

    public function ShowPortfolio()
    { 
        $images = Multipic::all();
        return view('admin.page.portfolio',compact('images'));
    }

    public function ShowServices()
    {
        return view('admin.page.service');
    }
    

    public function ShowAbout()
    {
        $abouts = DB::table('abouts')->first();
    
        return view('admin.page.about',compact('abouts'));
    }
    
}
