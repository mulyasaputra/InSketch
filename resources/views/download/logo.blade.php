<div class="row" id="shots-card" style="--bs-gutter-x: 19px;">
@foreach ($posts as $post )
   <div class="col-12 col-md-6 col-lg-4 col-xl-3 position-relative overflow-hidden">
      <a class="card ratio ratio-1x1 overflow-hidden" href="{{ $post->img }}"
         data-fancybox="gallery"
         data-caption="Optional caption">
            <img src="{{ $post->img }}" alt="img" style="object-fit: cover;transform: scale(1.1);">
            <div class="position-absolute contain-hover" style="visibility: hidden"><span class="blok far fa-eye"></span></div>
      </a>
      <div><a class="text-white text-decoration-none title-logo fw-semibold" href="/view/{{ $post->slug }}">Logo {{ $post->title }}</a></div>
   </div>
   @endforeach
</div>