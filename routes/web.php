<?php

use App\Models\Category;
use App\Models\Discover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthLogController;
use App\Http\Controllers\DashboardAppController;
use App\Http\Controllers\DashboardCodeController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardVectorController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardDiscoverController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/

Route::get('/', function () {
    return view('home',[
      'title' => 'Home',
      'discovers' => Discover::latest()->take(10)->get(),
    ]);
});

Route::get('/license', function () {
    return view('license',[
      'title' => 'License',
    ]);
});
Route::get('/about', function (Request $request) {
   $jsonString = file_get_contents('json/translate.json');
   $data = json_decode($jsonString);
    return view('about',[
      'title' => 'About',
      'translate' => $data,
      'lang' => $request->lang
    ]);
});
Route::get('/preview/{discover}', function (Discover $discover) {
   return view('pages/preview', [
      'title' => 'Download',
      'discovers' => $discover
     ]);
});

// Frontend Blog Post
Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/{post}', [PostController::class, 'show']);
Route::get('/author/{user:username}', function (\App\Models\User $user) {
   return view('blog',[
      'title' => "Pos by Author : $user->name",
      'posts' => $user->posts->load('category','user')
   ]);
});


// RoutePagesController
Route::get('/view/{vector}', [PagesController::class, 'PagesView']);
Route::get('/download', [PagesController::class, 'index']);
Route::get('/download/discover', [PagesController::class, 'discover']);
Route::get('/download/logo', [PagesController::class, 'logo']);
Route::get('/download/code', [PagesController::class, 'code']);
Route::get('/download/app', [PagesController::class, 'apps']);
Route::get('/download/vector', [PagesController::class, 'vector']);

// AuthLogController
Route::get('/login', [AuthLogController::class, 'getLogin'])->name('login')->middleware('guest');
Route::get('/register', [AuthLogController::class, 'getRegister'])->middleware('guest');
Route::post('/login', [AuthLogController::class, 'postLogin']);
Route::post('/register', [AuthLogController::class, 'postRegister']);
Route::post('/logout', [AuthLogController::class, 'postLogout']);

// Dashboard
Route::get('/dashboard', function(){return view('/dashboard/index',['title' => 'Dashboard']);})->middleware('auth');

// DashboardPostController
Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// DashboardDiscoverController
Route::get('/dashboard/discover/createSlug', [DashboardDiscoverController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/discover', DashboardDiscoverController::class)->middleware('auth');


// DashboardVectorController
Route::get('/dashboard/vector/createSlug', [DashboardVectorController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/vector', DashboardVectorController::class)->middleware('auth');

// DashboardCodeController
Route::get('/dashboard/code/createSlug', [DashboardAppController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/code', DashboardCodeController::class)->except('show')->middleware('auth');

// DashboardAppController
Route::get('/dashboard/apps/createSlug', [DashboardAppController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/apps', DashboardAppController::class)->middleware('auth');

// DashboardCategoryController
Route::get('/dashboard/category/createSlug', [DashboardCategoryController::class, 'createSlug'])->middleware('auth');
Route::resource('/dashboard/category', DashboardCategoryController::class)->except('show','create')->middleware('auth');