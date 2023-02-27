@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .add-newpost{
      margin-top: 1em
   }
}
</style>
<div class="container-fluid">
   @if (session()->has('success'))
   <div class="alert alert-success" role="alert">{{ session('success') }}</div>
   @endif
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
      <a href="/dashboard/vector/create" class="btn btn-primary shadow-sm add-newpost"><i class="fas fa-plus"></i> <span class="d-none d-sm-inline-block">Add New</span></a>
   </div>
   

   <!-- Content Row -->
   <div class="list-posts row">
      @foreach ( $posts as $post )
      <div class="col-xl-2 col-lg-3 p-2">
         <div class="rounded bg-white shadow-sm" style="padding: 3px">
            <img class="border rounded w-100" src="https://dummyimage.com/300x300&text={{ $post->type }}" alt="gambar" style="object-fit: cover!important; height: 7em;">
            <div class="p-2">
               <h6 class="card-title text-dark font-weight-bolder">{{ $post->title }}</h6>
               <div class="mt-3">
                  <a class="badge text-white p-2 bg-danger" href="#"><i class="fas fa-trash-alt"></i></a>
                  <a class="badge text-white p-2 bg-primary" href="#"><i class="fas fa-pencil-alt"></i></a>
                  <a class="badge text-white p-2 bg-warning" href="#"><i class="fas fa-eye"></i></a>
               </div>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection