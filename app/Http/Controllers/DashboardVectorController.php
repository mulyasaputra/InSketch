<?php

namespace App\Http\Controllers;

use App\Models\Vector;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardVectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.vector.index',[
         'title' => 'Vector',
         'posts' => Vector::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.posts.vector.create',[
         'title' => 'Posts vector',
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
      $validatedData = $request->validate([
         'title' => 'required|min:3|max:255',
         'slug' => 'required|unique:vectors',
         'type' => 'required',
         'tag' => 'required|max:255',
         'color' => 'max:255',
         'download' => 'required',
         'img' => 'required',
         'body' => 'required',
         'file_type' => 'required',
         'file_size' => 'required',
      ]);
      $validatedData['user_id'] = auth()->user()->id;

      Vector::create($validatedData);
      return redirect('/dashboard/vector')->with('success','New '.$request->type.' has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vector  $vector
     * @return \Illuminate\Http\Response
     */
    public function show(Vector $vector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vector  $vector
     * @return \Illuminate\Http\Response
     */
    public function edit(Vector $vector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vector  $vector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vector $vector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vector  $vector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vector $vector)
    {
        //
    }

    public function createSlug(Request $request){
      $slug = SlugService::createSlug(Vector::class, 'slug', $request->title);
      return response()->json(['slug' => $slug]);
    }
}
