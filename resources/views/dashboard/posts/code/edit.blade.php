@extends('dashboard.layouts.main')
@section('container')
<style>@media (max-width: 465px){
   .add-newpost{
      margin-top: 1em
   }
}
</style>
<div class="container-fluid">
   <h1>Publish SourceCode</h1>
   <div class="dropdown-divider"></div>
   <div> {{--  class="col-lg-8" --}}
      <form method="post" action="/dashboard/code/{{ $post->slug }}" class="col-lg-8">
         @method('put')
         @csrf
         <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title' , $post->title) }}" required autofocus>
            <input type="hidden" id="slug" name="slug" value="{{ old('slug' , $post->slug) }}">
            @error('title')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
         </div>
         <div class="form-group">
            <label for="thumbnail">Thumbnail</label>
            <div class="d-flex" style="gap: 1em">
               <input type="text" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" name="thumbnail" value="{{ old('thumbnail' , $post->thumbnail) }}" autofocus>
               <button type="button" class="btn btn-primary" onclick="generate()">Generate</button>
            </div>
               @error('thumbnail')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
         <div class="row">
            <div class="form-group col-lg-6">
               <label for="link1">To Github (Optional)</label>
               <input type="url" class="form-control @error('link1') is-invalid @enderror" id="link1" name="link1" placeholder="https://" value="{{ old('link1' , $post->link1) }}">
               @error('link1')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="form-group col-lg-6">
               <label for="link2">To Online (Optional)</label>
               <input type="url" class="form-control @error('link2') is-invalid @enderror" id="link2" name="link2" placeholder="https://" value="{{ old('link2' , $post->link2) }}">
               @error('link2')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
         </div>
         <div class="form-group">
            <label for="excerpt">Body</label>
            @error('excerpt')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            <textarea name="excerpt" name="excerpt" id="excerpt" cols="200" class="form-control @error('excerpt') is-invalid @enderror" style="min-height: 12em" maxlength="155" required>{{ old('excerpt' , $post->excerpt) }}</textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      </form>
   </div>
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
function generate(){
   // Generate Googel Drive Url
   let url = document.getElementById("thumbnail").value,
      a = url.search("/d/"),
      b = url.search("google.com"),
      posisi = url.search("/d/") + 3,
      id = url.slice(posisi).split(/[/]+/);
   if ((b > 1) & (a > 1)) {
      document.getElementById("thumbnail").value = `https://drive.google.com/uc?export=view&id=${id[0]}`;
   } else {
      generatea.classList.add("show");
      generatea.style.display = "inline";
   }
}
function modalClose() {
   generatea.classList.remove("show");
   generatea.style.display = "none";
}

// Cekslug
const title = document.querySelector("#title"),
         slug = document.querySelector("#slug");
   title.addEventListener('change', function(){
      fetch('/dashboard/posts/createSlug?title=' + title.value).then(response => response.json()).then(data => slug.value = data.slug)
   })
</script>
@endsection