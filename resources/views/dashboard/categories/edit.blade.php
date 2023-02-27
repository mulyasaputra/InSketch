@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .add-newpost{
      margin-top: 1em
   }
}</style>
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
      <div class="dropdown-divider"></div>
   </div>
   <form class="col-lg-8 mb-4" action="/dashboard/category/{{ $category->slug }}" method="POST">
      @method('put')
      @csrf
      <div class="mb-3">
         <label for="name">Category</label>
         <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" required autofocus>
         @error('name')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="mb-3">
         <label for="slug">Slug</label>
         <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $category->slug) }}" required>
         @error('slug')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <button type="submit" class="btn btn-primary">Add Category</button>
   </form>
</div>
<script>
   const name = document.querySelector("#name"),
         slug = document.querySelector("#slug");
   name.addEventListener('change', function(){
      fetch('/dashboard/category/createSlug?name=' + name.value).then(response => response.json()).then(data => slug.value = data.slug);
   })
</script>
@endsection