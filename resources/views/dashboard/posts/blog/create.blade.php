@extends('dashboard.layouts.main')
@section('container')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>.trix-button-group.trix-button-group--file-tools{display: none}</style>
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="mb-4">
      <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
      <div class="dropdown-divider"></div>
   </div>

   <form class="col-lg-8 mb-4" action="/dashboard/posts/" method="POST">
      @csrf
      <div class="mb-3">
         <label for="title">Title</label>
         <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
         @error('title')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="mb-3">
         <label for="slug">Slug</label>
         <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
         @error('slug')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="mb-3">
         <label for="category">Category</label>
         <select class="form-select form-control" name="category_id" id="category">
            @foreach ($Categories as $category)
            @if (old('category_id') == $category->id)
            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
         </select>
      </div>
      <div class="mb-3">
         <label for="body">Body</label>
         @error('body')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         <input id="body" type="hidden" name="body" value="{{ old('body') }}">
         <trix-editor input="body"></trix-editor>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
<script>
   const title = document.querySelector("#title"),
         slug = document.querySelector("#slug");
   title.addEventListener('change', function(){
      fetch('/dashboard/posts/createSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
   })
</script>
@endsection