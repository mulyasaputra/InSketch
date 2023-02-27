<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Code;
use App\Models\Vector;
use App\Models\Discover;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      return redirect('/download/discover');
    }
    public function discover(){
      return view('download',[
            'title' => 'Discover',
            'view' => 'download.discover',
            'posts' => Discover::latest()->get()
         ]);
    }
    public function apps(){
      return view('download',[
            'title' => 'Apps',
            'view' => 'download.apps',
            'posts' => App::latest()->get()
         ]);
    }
    public function code(){
      return view('download',[
            'title' => 'Code',
            'view' => 'download.code',
            'posts' => Code::latest()->get()
         ]);
    }
    public function logo(){
      return view('download',[
            'title' => 'Logo',
            'view' => 'download.logo',
            'posts' => Vector::latest()->where('type', 'logo')->get()
         ]);
    }
    public function vector(){
      return view('download',[
            'title' => 'vector',
            'view' => 'download.vector',
            'posts' => Vector::latest()->where('type', 'vector')->get()
         ]);
    }

   //  PagesView
   public function PagesView(Vector $vector){
      return view('pages/down', [
         'title' => 'Preview DDiscover',
         'posts' => $vector
        ]);
    }
}