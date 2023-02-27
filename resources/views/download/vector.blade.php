<div class="row" id="shots-card" style="--bs-gutter-x: 12px;">
@foreach ($posts as $post)
   <div class="col-12 col-lg-6 position-relative overflow-hidden row">
      <div class="col-6 p-0 {{ $post->color }} rounded-start-3 overflow-hidden asset-vector position-relative">
         <img class="w-100 position-relative z-1" src="{{ $post->img }}" />
      </div>
      <div class="col-6 p-0 rounded-end-3 overflow-hidden">
         <div class="d-flex justify-content-center flex-column w-100 px-3 px-xl-5 bg-white h-100">
            <h2 class="text-dark fw-bold fs-3">{{ $post->title }}</h2>
            <p class="mb-3 mt-2 mb-xl-4 mt-xl-2 mb-xxl-5" style="color: #8c93bd;font-size: 12px;">{{ $post->tag }}</p>
            <a href="/view/{{ $post->slug }}"><button class="{{ $post->color }} text-white px-4 py-2 text-uppercase rounded-pill fw-semibold border-0" style="box-shadow: 0 11px 36px 0 rgb(70 89 138 / 25%);">View Project</button></a >
         </div>
      </div>
   </div>
   @endforeach
</div>