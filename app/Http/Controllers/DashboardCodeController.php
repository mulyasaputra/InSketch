<?php

namespace App\Http\Controllers;

use App\Models\Code;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('dashboard.posts.code.index',[
         'title' => 'Discover',
         'posts' => Code::latest()->where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.posts.code.create',[
         'title' => 'Posts Create',
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
         'title' => 'required|max:255',
         'excerpt' => 'required|max:155'
      ]);
      $validatedData['slug'] = $request->slug;
      $validatedData['link2'] = $request->link2;
      $validatedData['link1'] = $request->link1;
      $validatedData['user_id'] = auth()->user()->id;

      Code::create($validatedData);
      return redirect('/dashboard/code')->with('success','Source Code has been posted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
      return view('dashboard.posts.code.edit',[
         'title' => 'Edit your SourceCode',
         'post' => $code,
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
      $rules = [
         'title' => 'required|max:255',
         'excerpt' => 'required|max:155'
        ];
        if ($request->slug != $code->slug) {
         $rules['slug'] = 'required|unique:posts';
        };
        $validatedData = $request->validate($rules);
        $validatedData['link2'] = $request->link2;
        $validatedData['link1'] = $request->link1;
        $validatedData['user_id'] = auth()->user()->id;

        Code::where('id', $code->id)->update($validatedData);
        return redirect('/dashboard/code')->with('success','Success updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
      Code::destroy($code->id);
      return redirect('/dashboard/code')->with('success', $code->title.' was successfully removed!');
    }

    public function createSlug(Request $request){
      $slug = SlugService::createSlug(Code::class, 'slug', $request->title);
      return response()->json(['slug' => $slug]);
    }
}
