@extends('dashboard.layouts.main')
@section('container')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>.trix-button-group.trix-button-group--file-tools{display: none}</style>
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="mb-4">
      <h1 class="h3 mb-0 text-gray-800">Posts  <span id="type_name">logo</span></h1>
      <div class="dropdown-divider"></div>
   </div>

   <form class="col-lg-10 col-xl-8 mb-4" action="/dashboard/vector/" method="POST">
      @csrf
      <div class="mb-3">
         <label for="title">Title</label>
         <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required autofocus>
         <input type="hidden" id="slug" name="slug" value="{{ old('slug') }}">
         @error('title')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         @error('slug')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="row">
         <div class="mb-3 col-12 selecttype">
            <label for="type">Type</label>
            <select class="form-select form-control" name="type" id="type">
               <option value="logo">Logo</option>
               <option value="vector">Vector</option>
            </select>
         </div>
         <div class="mb-3 col-6 selectColor" style="display: none">
            <label for="color">Color</label>
            <select class="form-select form-control" name="color" id="color">
               <option value="magenta">magenta</option>
               <option value="green">green</option>
               <option value="blue">blue</option>
               <option value="red">red</option>
               <option value="green-yellow">Green Yellow</option>
            </select>
         </div>

      </div>
      <div class="mb-3">
         <label for="download">Link Download</label>
         <input type="url" class="form-control @error('download') is-invalid @enderror" id="download" name="download" value="{{ old('download') }}" required>
         @error('download')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
      </div>
      <div class="row">
         <div class="mb-3 col-8">
            <label for="tag">Tag</label>
            <input type="text" class="form-control @error('tag') is-invalid @enderror" id="tag" name="tag" value="{{ old('tag') }}" placeholder="Separate tags with commas" required>
            @error('tag')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         </div>
         <div class="mb-3 col-2">
            <label for="file_type">File Type</label>
            <input type="text" class="form-control @error('file_type') is-invalid @enderror" id="file_type" name="file_type" value="{{ old('file_type') }}" required>
            @error('file_type')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         </div>
         <div class="mb-3 col-2">
            <label for="file_size">File Size</label>
            <input type="text" class="form-control @error('file_size') is-invalid @enderror" id="file_size" name="file_size" value="{{ old('file_size') }}" required>
            @error('file_size')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         </div>
      </div>
      <div class="mb-3">
         <label for="img">Preview <span id="type_name">logo</span></label>
         <div class="d-flex" style="gap: 1em">
            <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value="{{ old('img') }}" required>
            <button type="button" class="btn btn-primary" onclick="generate()">Generate</button>
         </div>
         @error('img')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
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

 <!-- Modal -->
 <div class="modal fade" id="generatea" tabindex="-1" role="dialog" style="display: none; background: rgba(6, 6, 6, 0.522)" aria-modal="true">
   <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="title">Modal title</h5>
         <button type="button" onclick="modalClose()" class="close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         Url yang anda masukan bukan berasal dari google drive
       </div>
       <div class="modal-footer">
         <button type="button" onclick="modalClose()" class="btn btn-secondary">Close</button>
       </div>
     </div>
   </div>
 </div>
<script>
   const title = document.querySelector("#title"),
         slug = document.querySelector("#slug");
   title.addEventListener('change', function(){
      fetch('/dashboard/vector/createSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
   })

   const titleName = document.querySelectorAll("#type_name"),
         type = document.querySelector("#type"),
         selecttype = document.querySelector(".selecttype"),
         color = document.querySelector(".selectColor");
   type.addEventListener('change', function(){
      if (this.value == 'vector') {
         titleName.forEach(e => {
            e.innerHTML="Vector";
         });
         color.style.display = 'inline';
         selecttype.classList.remove("col-12");
         selecttype.classList.add("col-6");
      } else {
         titleName.forEach(e => {
            e.innerHTML="Logo";
         });
         color.style.display = 'none';
         selecttype.classList.remove("col-6");
         selecttype.classList.add("col-12");
      }
   })

   function generate(){
      // Generate Googel Drive Url
      let url = document.getElementById("img").value,
         a = url.search("/d/"),
         b = url.search("google.com"),
         posisi = url.search("/d/") + 3,
         id = url.slice(posisi).split(/[/]+/);
      if ((b > 1) & (a > 1)) {
         document.getElementById("img").value = `https://drive.google.com/uc?export=view&id=${id[0]}`;
      } else {
         generatea.classList.add("show");
         generatea.style.display = "inline";
      }
   }
   function modalClose() {
      generatea.classList.remove("show");
      generatea.style.display = "none";
   }
</script>
@endsection