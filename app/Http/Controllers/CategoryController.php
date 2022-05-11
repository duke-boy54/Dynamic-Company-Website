<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 
use Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function AllCat(){
        $categories = Category::latest()->paginate(4);
        $trashCat = Category::onlyTrashed()->latest()->paginate(2);

        return view('admin.category.index',compact('categories','trashCat'));
    }

    public function AddCat(Request $request)
    {
        $validatedDate = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ],
           [
            'category_name.required' => 'Please input your category',
           ]);

           $category = new Category;
           $category->category_name = $request->category_name;
           $category->user_id = Auth::user()->id;
           $category->save();

           return redirect()->back()->with('success','Category added succesfully');
    }

    public function Edit($id)
    {
        $categories = Category::find($id);
        return view ('admin.category.edit',compact('categories'));
    }

    public function Update(Request $request ,$id)
    {
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();
        return redirect()->route('all.category')->with('success','category updated suiccessfully');

        //or
        // $update = Category::find($id)->update([
        //     'category_name'->request->category_name,
        //     'user_id'->Auth::user()->id,
        // ]);
    }

    public function Delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('all.category')->with('success','category deleted successful');
    }

    public function Restore($id)
    {
        $category = Category::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success','category is restored successful');
    }

    public function Pdelete($id)
    {
        $category = Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success','Category is deleted permanently');
    }
}
