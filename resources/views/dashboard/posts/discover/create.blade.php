@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .add-newpost{
      margin-top: 1em
   }
}
.trix-button-group.trix-button-group--file-tools{
   display: none;
}
</style>
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<div class="container-fluid">
   <h1>Create New Discovery</h1>
   <div class="dropdown-divider"></div>
   <div> {{--  class="col-lg-8" --}}
      <form method="post" action="/dashboard/discover/">
         @csrf
         <div class="row">
            <div class="form-group col-lg-8">
               <label for="title">Title</label>
               <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
               @error('title')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group col-lg-4">
               <label for="slug">Slug</label>
               <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
               @error('slug')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
         </div>
         <div class="row">
            <div class="form-group col-lg-4">
               <label for="category">Category</label>
               <select class="custom-select" id="category" name="category_id">
                  @foreach ( $Categories as $category)
                     @if (old('category_id') == $category->id)
                     <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                     @else
                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endif
                  @endforeach
               </select>
            </div>
            <div class="form-group col-lg-4">
               <label for="name">Project Name</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
               @error('name')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group col-lg-4">
               <label for="link">link File</label>
               <input type="url" class="form-control @error('link') is-invalid @enderror" id="link" name="link" placeholder="https://" value="{{ old('link') }}" required>
               @error('link')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
         </div>
         <div class="row">
            <div class="form-group col-lg-4">
               <label for="cover">Project cover</label>
               <input type="url" class="form-control @error('cover') is-invalid @enderror" id="cover" name="cover" value="{{ old('cover') }}" placeholder="https://drive.google.com/file">
               @error('cover')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group col-lg-4">
               <label for="thumbnail">Link Thumbnail</label>
               <input type="url" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" placeholder="https://drive.google.com/file" value="{{ old('thumbnail') }}">
               @error('thumbnail')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group col-lg-4">
               <label for="banner">Banner (Optional)</label>
               <input type="url" class="form-control" id="banner" name="banner" placeholder="https://drive.google.com/file" value="{{ old('banner') }}">
            </div>
         </div>
         <div class="row">
            <div class="form-group col-lg-8">
               <label for="body">Body</label>
               @error('body')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
               <input id="x" type="hidden" name="body" value="{{ old('body') }}" required>
               <trix-editor input="x"></trix-editor>
            </div>
            <div class="form-group col-lg-4">
               <label for="tag">Add Tag</label>
               <textarea cols="30" class="form-control @error('tag') is-invalid @enderror" id="tag" name="tag" placeholder="Separate tags with commas" style="min-height: 9em;">{{ old('tag') }}</textarea>
               @error('tag')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
</div>
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0-alpha.0/dist/trix.umd.js"></script>
<script>
   const title = document.querySelector("#title"),
         slug= document.querySelector("#slug");
   title.addEventListener('change', function(){
      fetch('/dashboard/discover/createSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
   })
</script>
@endsection