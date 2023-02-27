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
      <h1 class="h3 mb-0 text-gray-800">Categories</h1>
      @can('admin')
      <button type="button" class="btn btn-primary shadow-sm add-newpost" data-toggle="modal" data-target="#addCategory"><i class="fas fa-plus"></i> <span class="d-none d-sm-inline-block">Add New</span></button>
      @endcan
   </div>
   @if (session()->has('success'))
   <div class="alert alert-success col-lg-8" role="alert">{{ session('success') }}</div>
   @endif
   <!-- Content Row -->
   <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category</th>
          <th scope="col">Actioan</th>
        </tr>
      </thead>
      <tbody class="text-dark">
         @foreach ($categories as $category)         
         <tr>
            <th style="min-width: 2em; width: 2em">{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td style="min-width: 7em; width: 7em">
               @can('admin')
               <form class="d-inline" action="/dashboard/category/{{ $category->slug }}" method="post">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger"  onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
               </form>
               <a class="btn btn-primary" href="/dashboard/category/{{ $category->slug }}/edit"><i class="fas fa-pencil-alt"></i></a>
               @endcan
            </td>
         </tr>
         @endforeach
      </tbody>
    </table>
</div>

{{-- ModalBox --}}
<div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="addCategoryLabel">New message</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="/dashboard/category/" method="POST">
            @csrf
            <div class="mb-3">
               <label for="name">Category</label>
               <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autofocus>
               @error('name')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="mb-3">
               <label for="slug">Slug</label>
               <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
               @error('slug')<small id="emailHelp" class="form-text text-danger">{{ $message }}</small>@enderror
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Add Category</button>
            </div>
         </div>
      </form>
     </div>
   </div>
 </div>
 <script>
   const name = document.querySelector("#name"),
      slug = document.querySelector("#slug");
   name.addEventListener('change', function(){
      fetch('/dashboard/category/createSlug?name=' + name.value).then(response => response.json()).then(data => slug.value = data.slug);
   })
   $('#addCategory').on('show.bs.modal', function (event) {
         var button = $(event.relatedTarget) // Button that triggered the modal
         var recipient = button.data('whatever') // Extract info from data-* attributes
         // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
         // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
         var modal = $(this)
         modal.find('.modal-title').text('New message to ' + recipient)
         modal.find('.modal-body input').val(recipient)
      })
 </script>
@endsection