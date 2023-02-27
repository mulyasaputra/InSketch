@extends('layouts.main')
@section('container')
<div class="container my-5 pt-5">
   <div class="row">
      <div class="col-md-8">
         <h1 class="text-center">{{ $post->title }}</h1>
         <img src="https://source.unsplash.com/1200x500?{{ $post->category->slug ?? 'random' }}" alt="Web Programming" class="img-fluid mb-3">
         <p>By. <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/blog?category={{ $post->category->slug ?? 'what'}}">{{ $post->category->name ?? 'Without Categories' }}</a></p>
         <div>{!! $post->body !!}</div>
         <a href="/blog">Back to Blog</a>
      </div>
      <div class="col-md-4">
         <div class="card text-bg-secondary mb-3">
            <div class="card-header">This Ads</div>
            <div class="card-body">
              <h5 class="card-title">Secondary card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection