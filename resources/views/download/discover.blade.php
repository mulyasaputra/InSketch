<style>
.img {
   -webkit-transition: all 0.5s ease; /* Safari and Chrome */
   -moz-transition: all 0.5s ease; /* Firefox */
   -ms-transition: all 0.5s ease; /* IE 9 */
   -o-transition: all 0.5s ease; /* Opera */
   transition: all 0.5s ease;
}

.thumbnail:hover .blok {
  opacity: 1;
}
.thumbnail:hover .img {
  -webkit-transform: scale(1.1); /* Safari and Chrome */
  -moz-transform: scale(1.1); /* Firefox */
  -ms-transform: scale(1.1); /* IE 9 */
  -o-transform: scale(1.1); /* Opera */
  transform: scale(1.1);
}

.blok {
  border-radius: 6px;
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  background: var(--Blur);
  backdrop-filter: blur(3px);
  -moz-backdrop-filter: blur(3px);
  -webkit-backdrop-filter: blur(3px);
  -o-backdrop-filter: blur(3px);
  -webkit-transition: all 1s ease; /* Safari and Chrome */
  -moz-transition: all 1s ease; /* Firefox */
  -ms-transition: all 1s ease; /* IE 9 */
  -o-transition: all 1s ease; /* Opera */
  transition: all 1s ease;
  opacity: 0;
  display: grid;
  place-items: center;
  color: rgba(0, 0, 0, 0.753);
  font-size: 70px;
}
.TLable {
  background: rgba(0, 0, 0, 0.315);
  padding: 2px 40px 6px 20px;
  border-bottom-right-radius: 50px;
}
</style>
<div class="row" id="shots-card" style="--bs-gutter-x: 12px;">
   @foreach ($posts as $post)
   <div class="col-12 col-md-6 col-lg-4 col-xl-3">
      <div class="thumbnail position-relative overflow-hidden rounded">
        <a class="overflow-hidden" href="{{ $post->cover }}" data-fancybox="gallery" data-caption="Optional caption">
          <div class="blok far fa-eye"></div>
          <img class="img w-100 rounded" src="{{ $post->cover }}" alt="InSketch">
        </a>
        <div class="TLable position-absolute z-1 top-0">{{ $post->category->name }}</div>
      </div>
      <div class="d-flex justify-content-between fs-6 mt-2">
        <div class="kiri">
          <a class="fas fa-share text-decoration-none text-white" target="_blank" href="/preview/{{ $post->slug }}">
            <span class="fw-normal" style="font-family: sans-serif">  {{ $post->name }}</span>
          </a>
        </div>
        <div class="kanan">
          <i class="far fa-comment ms-1"><span> 0 </span></i>
          <i class="far fa-heart ms-1"><span> 0 </span></i>
          <i class="far fa-eye ms-1"><span> 0 </span></i>
        </div>
      </div>
    </div>
   @endforeach
</div>
