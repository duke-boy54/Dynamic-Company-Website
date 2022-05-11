<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Models\Multipic;
use App\Http\Controllers\PagesController;
use App\Models\Brand;
use App\Models\About;
use App\Models\ContactForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $brands = Brand::all();
    $abouts = DB::table('abouts')->first();
    $images = Multipic::all();
    return view('home',compact('brands','abouts','images'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {

    // $users = DB::table('users')->get();
    return view('admin.index');
})->name('dashboard');

//category controller
Route::get('/category/all',[CategoryController::class, 'AllCAt'])->name('all.category');
Route::get('/testing',[TestingController::class, 'testing'])->name('test');

Route::post('/category/add',[CategoryController::class, 'AddCat'])->name('store.category');
Route::get('/category/edit/{id}',[CategoryController::class, 'Edit']);
Route::post('/category/update/{id}',[CategoryController::class, 'Update']);
Route::get('/category/delete/{id}',[CategoryController::class, 'Delete']);

// restore route
Route::get('/category/restore/{id}',[CategoryController::class, 'Restore']);
Route::get('/category/pdelete/{id}',[CategoryController::class, 'Pdelete']);

//brand Route
Route::get('/brand/all',[BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('/brand/add',[BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('/brand/edit/{id}',[BrandController::class, 'EditBrand']);
Route::post('/brand/update/{id}',[BrandController::class, 'UpdateBrand']);
Route::get('/brand/delete/{id}',[BrandController::class, 'DeleteBrand']);

// Multipicture Routes
Route::get('/multi/image',[BrandController::class, 'Multpic'])->name('multi.image');
Route::post('/store/image',[BrandController::class, 'StorePic'])->name('store.image');
Route::get('/image/delete/{id}',[BrandController::class, 'DeletePic'])->name('image.delete');

// logout route
Route::get('/user/logout',[BrandController::class, 'Logout'])->name('user.logout');

// all admin ROUTES
Route::get('/home/slider/',[HomeController::class,'HomeSlider'])->name('home.slider');
Route::get('/add/slider',[HomeController::class, 'AddSlider'])->name('slider.add');
Route::post('/store/slider',[HomeController::class, 'CreateSlider'])->name('store.slider');
Route::get('/slider/edit/{id}',[HomeController::class, 'EditSlider']);
Route::post('/slider/update/{id}',[HomeController::class, 'UpdateSlider']);
Route::get('/slider/delete/{id}',[HomeController::class, 'DeleteSlider']);

// about Route
 Route::get('/home/about/',[AboutController::class, 'AddAbout'])->name('home.about');
 Route::get('/add/about/',[AboutController::class, 'CreateAbout'])->name('about.add');
 Route::post('/store/about/',[AboutController::class, 'StoreAbout'])->name('store.about');
 Route::get('/about/edit/{id}',[AboutController::class, 'EditAbout']);
 Route::post('/about/update/{id}',[AboutController::class, 'UpdateAbout']);
 Route::get('/about/delete/{id}',[AboutController::class, 'DeleteAbout']);

//  CONTACT ROUTES
Route::post('/contact/form',[ContactController::class, 'ContactForm'])->name('contact.form');
Route::get('/contact/messages',[ContactController::class, 'ContactMessages'])->name('contact.messages');
Route::get('/contact/delete/{id}',[ContactController::class, 'DeleteMessage']);

//Pages Routes
Route::get('/show/blog',[PagesController::class, 'ShowBlog'])->name('show.blog');
Route::get('home',[PagesController::class, 'ShowHome'])->name('show.home');
Route::get('/contact',[PagesController::class, 'ShowContact'])->name('contact');
Route::get('/portfolio',[PagesController::class, 'ShowPortfolio'])->name('portfolio');
Route::get('/services',[PagesController::class, 'ShowServices'])->name('services');
Route::get('/aboutus',[PagesController::class, 'ShowAbout'])->name('about');
