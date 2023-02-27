@extends('layouts.main')
@section('container')
<div class="container my-5 pt-4">
   <div class="d-flex justify-content-between align-items-center">
      <h1>{{ $title }}</h1>
      <form action="/blog" method="get">
         @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
         @endif
         <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
            <button class="btn btn-secondary" type="submit">Search</button>
         </div>
      </form>
   </div>
   @if ($posts->count()) 
   <div class="card mb-3 bg-dark shadow">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name ?? 'random'}}" class="card-img-top" alt="img">
      <div class="card-body">
        <h5 class="card-title">{{ $posts[0]->title}}</h5>
        <p>By. <a href="/author/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug ?? 'what'}}">{{ $posts[0]->category->name ?? 'Without Categories'}}</a> on </a> {{ $posts[0]->created_at->diffForHumans() }}</p>
        <p class="card-text">{{$posts[0]->excerpt}}...</p>
        <a href="/blog/{{ $posts[0]->slug }}" class="btn-primary btn">Readmore</a>
      </div>
   </div>
   <div class="container-fluid p-0">
      <div class="row">
         @foreach ($posts->skip(1) as $post)
         <div class="col-md-4" style="margin: calc(var(--bs-gutter-x) * .5) 0">
            <div class="card bg-dark">
               <img src="https://source.unsplash.com/1200x400?{{ $post->category->name ?? 'random'}}" class="card-img-top" alt="img" style="height: 10em;">
               <div class="card-body">
                  <h5 class="card-title"><a class="text-decoration-none text-white" href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
                  <small>By. <a href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> on </a> {{ $post->created_at->diffForHumans() }}</small>
                  <p class="card-text">{{$post->excerpt}}</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
   @else
   <p class="text-center fs-4 mt-5">No Post found.</p>
   @endif
</div>
{{-- {{ $posts->links() }} --}}
@endsection