<div class="row" id="shots-card" style="--bs-gutter-x: 12px;">
   @foreach ($posts as $post)
      <div class="col-12 col-md-6 col-xl-4">
         <div class="card">
            <img src="{{ $post->thumbnail }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h4 ><a href="{{ $post->link1 ?? $post->link2 ?? '/'}}" class="card-title text-decoration-none text-dark fw-semibold">{{ $post->title }}</a></h4>
            <span class="text-secondary">Senin, 09 Agustus 2021</span>
            <p class="card-text text-dark">{{ $post->excerpt }}</p>
            <div class="row mt-4 justify-content-between mx-0">
               <a href="{{ $post->link1 ?? '/' }}" class="btn btn-primary col-9">Go To Github</a>
               <a href="{{ $post->link2 ?? '/' }}" class="col-2 text-dark text-decoration-none btn btn-primary text-white"><i class="icon-globe fa-sharp fa-regular fa-globe"></i></a>
            </div>
            </div>
         </div>
      </div>
   @endforeach
</div>