@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="/css/download.css">
<section class="pb-3 flex-fill">
   <div id="nav-fluid2" class="py-3 position-sticky bg-dark">
      <div class="container d-flex justify-content-between flex-wrap">
         <div class="d-flex align-items-center overflow-auto w-100 justify-content-between" id="navbar2" style="gap: 14px">
            <a class="{{Request::is('download/discover') ? 'active' : ''}}" href="/download/discover">Discover</a>
            <a class="{{Request::is('download/logo') ? 'active' : ''}}" href="/download/logo">Logo</a>
            <a class="{{Request::is('download/app') ? 'active' : ''}}" href="/download/app">Apps</a>
            <a class="{{Request::is('download/vector') ? 'active' : ''}}" href="/download/vector">Vector</a>
            <a class="{{Request::is('download/code') ? 'active' : ''}}" href="/download/code">Code</a>
         </div>
         <div class="custom-select w-100 mt-3 mt-md-0 {{Request::is('download/discover') ? '' : 'd-none'}}">
            <select>
              <option value="0">All Design</option>
              <option value="0">All Design</option>
              @if (Request::is('download/discover'))   
                  @foreach ($posts as $post)
                  <option value="{{ $post->category->id }}">{{ $post->category->name }}</option>
                  @endforeach
               @endif
            </select>
         </div>
      </div>
   </div>
   <div class="container pt-3">
      @include($view)
   </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
<script src="/js/download.js"></script>
@endsection
