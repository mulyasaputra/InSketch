<?php

namespace App\Http\Controllers;

use App\Models\Discover;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardDiscoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.discover.index',[
         'title' => 'Discover',
         'posts' => Discover::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.posts.discover.create',[
         'title' => 'Posts Create',
         'Categories' => Category::all(),
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $rules = [
         'title' => 'required|max:255',
         'name' => 'required|max:50',
         'tag' => 'required|max:255',
         'link' => 'required|max:255',
         'slug' => 'required|unique:discovers',
         'category_id' =>'required',
         'body' => 'required'
      ];
      $validatedData = $request->validate($rules);
      if(strpos($request->thumbnail,"/d/")){
         if ($request->thumbnail) {
            $thumbnail = explode("/", explode("d/", $request->thumbnail)[1])[0];
            $validatedData['thumbnail'] = "https://drive.google.com/uc?export=view&id={$thumbnail}";
         };
      } else {
         $validatedData['thumbnail'] = $request->thumbnail;
      }
      if(strpos($request->cover,"/0/")){
         if ($request->cover) {
            $cover = explode("/", explode("d/", $request->cover)[1])[0];
            $validatedData['cover'] = "https://drive.google.com/uc?export=view&id={$cover}";
         };
      } else {
         $validatedData['cover'] = $request->cover;
      }
      $validatedData['user_id'] = auth()->user()->id;

       Discover::create($validatedData);
      return redirect('/dashboard/discover')->with('success','New Discover has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function show(Discover $discover)
    {
        return view('pages/preview', [
         'title' => 'Preview DDiscover',
         'discovers' => $discover
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function edit(Discover $discover)
    {
      return view('dashboard.posts.discover.edit',[
         'title' => 'Edit Post',
         'post' => $discover,
         'Categories' => Category::all(),
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discover $discover)
    {
      $rules = [
         'title' => 'required|max:255',
         'name' => 'required|max:50',
         'tag' => 'required|max:255',
         'link' => 'required|max:255',
         'category_id' =>'required',
         'body' => 'required'
        ];
        if ($request->slug != $discover->slug) {
         $rules['slug'] = 'required|unique:posts';
        };
        $validatedData = $request->validate($rules);
        if ($request->thumbnail != $discover->thumbnail) {
            $search = strpos($request->thumbnail, "drive.google.com");
            if($search){
               $thumbnail = explode("/", explode("d/", $request->thumbnail)[1])[0];
               $validatedData['thumbnail'] = "https://drive.google.com/uc?export=view&id={$thumbnail}";
            } else {
               $validatedData['thumbnail'] = $request->thumbnail;
            }
         };
        if ($request->cover != $discover->cover) {
            $search = strpos($request->cover, "drive.google.com");
            if($search){
               $cover = explode("/", explode("d/", $request->cover)[1])[0];
               $validatedData['cover'] = "https://drive.google.com/uc?export=view&id={$cover}";
            } else {
               $validatedData['cover'] = $request->cover;
            }
         };
        $validatedData['user_id'] = auth()->user()->id;

        Discover::where('id', $discover->id)->update($validatedData);
        return redirect('/dashboard/discover')->with('success','Discover has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discover  $discover
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discover $discover)
    {
      Discover::destroy($discover->id);
      return redirect('/dashboard/discover')->with('success','Discover has been deleted!');
    }

    
    public function createSlug(Request $request){
      $slug = SlugService::createSlug(Discover::class, 'slug', $request->title);
      return response()->json(['slug' => $slug]);
    }
}
