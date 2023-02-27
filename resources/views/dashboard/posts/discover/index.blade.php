@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .add-newpost{
      margin-top: 1em
   }
}
</style>
<div class="container-fluid">
   <!-- Page Heading -->
   @if (session()->has('success'))
      <div class="alert alert-success" role="alert">{{ session('success') }}</div>
   @endif
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Discover</h1>
      <a href="/dashboard/discover/create" class="btn btn-primary shadow-sm add-newpost"><i class="fas fa-plus"></i> <span class="d-none d-sm-inline-block">Add New</span></a>
   </div>

   <!-- Content Row -->
   <div class="list-posts row">
      @foreach ($posts as $post)         
      <div class="col-xl-4 col-lg-6 p-2">
         <div class="rounded p-3 bg-white shadow-sm">
            <img class="border rounded w-100" height="260"  src="{{ $post->thumbnail ?? '/assets/thumbnail_default.webp' }}" alt="gambar" style="object-fit: cover!important;">
            <div class="posts-body mt-3">
               <h5 class="card-title text-dark font-weight-bolder">{{ $post->title }}</h5>
               <h6 class="card-subtitle mb-2 text-muted"><span class="text-primary">Published</span> on {{ $post->created_at->diffForHumans() }}</h6>
               <div class="tag mt-4">
                  @php $tags = explode(',', $post->tag);@endphp
                  @foreach($tags as $tag)
                  <span class="px-3 py-1 my-1 d-inline-block rounded-pill border border-primary text-primary">{{ trim($tag) }}</span>
                  @endforeach
               </div>
            </div>
            <div class="mt-3">
               <form action="/dashboard/discover/{{$post->slug}}" method="POST" class="d-inline">
                  @method('DELETE')
                  @csrf
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
               </form>
               <a class="btn btn-primary" href="/dashboard/discover/{{$post->slug}}/edit"><i class="fas fa-pencil-alt"></i></a>
               <a class="btn btn-warning" target="_blank" href="/dashboard/discover/{{$post->slug}}"><i class="fas fa-eye"></i></a>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection