@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .list-posts > div{
      flex-direction: column !important;
   }
   .list-posts > div > img{
      width: 100% !important;
      height: 168px !important;
   }
   .list-posts > div > div:last-child{
      position: static !important;
   }
   .add-newpost{
      margin-top: 1em
   }
}</style>
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
      <a href="/dashboard/posts/create" class="btn btn-primary shadow-sm add-newpost"><i class="fas fa-plus"></i> <span class="d-none d-sm-inline-block">Add New</span></a>
   </div>

   @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
   @endif
   <!-- Content Row -->
   <div class="list-posts">
      @foreach ($posts as $post)
      <div class="d-flex rounded p-3 bg-white position-relative shadow-sm mt-3" style="gap: 1em">
         <img class="border rounded" width="139" height="120"  src="https://dummyimage.com/300x200&text=Posts" alt="gambar" style="object-fit: cover!important;">
         <div class="posts-body">
            <h5 class="card-title text-dark font-weight-bolder">{{ $post->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted"><span class="text-primary">Published</span> on {{ $post->created_at->diffForHumans() }}</h6>
            <div class="tag mt-4"><span class="px-3 py-1 my-1 d-inline-block rounded-pill border border-primary text-primary">{{ $post->category->name ?? 'Without Categories' }}</span></div>
         </div>
         <div class="action position-absolute" style="bottom: 1em; right: 1em;">
            <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
               @method('DELETE')
               @csrf
               <button class="btn btn-danger"  onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
            </form>
            <a class="btn btn-primary" href="/dashboard/posts/{{ $post->slug }}/edit"><i class="fas fa-pencil-alt"></i></a>
            <a class="btn btn-warning" target="_blank" href="/dashboard/posts/{{ $post->slug }}"><i class="fas fa-eye"></i></a>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection