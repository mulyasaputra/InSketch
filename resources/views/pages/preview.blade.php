<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta Browser Phone -->
    <meta name="theme-color" content="#1b1b1d" />
    <meta name="msapplication-navbutton-color" content="#1b1b1d" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#1b1b1d" />
    <!-- End Meta Browser -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/universal.css">
    <link rel="stylesheet" href="/css/preview.css">
    <title>{{$discovers->name}}</title>
  </head>
  <body class="d-flex flex-column justify-content-between min-vh-100">
   @include('layouts.navbar')
   <section id="contain" class="flex-fill">
      <div class="w-100 position-relative overflow-hidden" style="height: 460px">
         <img class="position-absolute bottom-0 w-100" src="{{ $discovers->banner }}" alt="" />
      </div>
      <div id="postContaint" class="container-lg position-relative z-1 bg-white px-md-4 py-md-5 p-0 top-lg-0 grid-md-columns-1">
         <div class="px-3 py-4 d-flex flex-column flex-sm-row flex-md-column justify-content-between gris-sm-row-2" style="background-color: #ececec;height: fit-content;">
            <div class="atas">
               <h1 class="fs-4 fw-bolder">{{ $discovers->name }}</h1>
               <span>Download the concept design only from InSketch.</span>
            </div>
            <div class="mt-4 mt-sm-0 mt-md-4">
               <div class="d-flex flex-wrap">
                  @php $tags = explode(',', $discovers->tag);@endphp
                  @foreach($tags as $tag)
                  <div class="rounded-pill tagar" >
                     <img class="h-100 me-1" src="/Icons/hashtag.svg" />
                     <span>{{ trim($tag) }}</span>
                  </div>
                  @endforeach
               </div>
               <div class="d-flex align-items-center mt-2" style="gap: 25px">
                  <a href="/link/slug/{{ $discovers->slug }}" class="text-white bg-dark w-100 py-2 text-center">Download</a>
                  <div class="far fa-share-square" style="font-size: 26px;" onclick="return showShare();"></div>
               </div>
            </div>
         </div>
         <div id="container" class="gris-sm-row-1 mt-4 mt-sm-0 px-md-0 px-3 mb-4">
            <div class="title">
               <h2 class="fs-1 fw-semibold">{{ $discovers->title }}</h2>
               <div class="create">
                  <img style="width: 3.4em" src="{{ $discovers->user->pic }}" alt="profile" />
                  <small>By <a class="text-decoration-none text-dark" href="#">{{ $discovers->user->name }}</a>, {{ $discovers->created_at->diffForHumans() }}</small>
               </div>
            </div>
            <div class="pagesImg mt-4">
               <h3 class="fw-semibold">Pages</h3>
               <div class="gallery w-100 row mx-0" style="--bs-gutter-x: .5rem;">
                  <div class="col-6 col-sm-4 col-md-3 col-xl-2" style="margin: calc(var(--bs-gutter-x) * .5) 0">
                     <a href="{{ $discovers->cover }}" data-fancybox="gallery" data-caption="Optional caption"><img class="w-100" src="{{ $discovers->cover }}" alt="thumbnail" /></a>
                  </div>
               </div>
               <article class="mt-4">
                  <h3 class="fw-semibold">{{ $discovers->name }}</h3>
                  {!! $discovers->body !!}
               </article>
            </div>
         </div>
      </div>  
   </section>
   @include('layouts.footer')
   {{-- Componen --}}
   @include('partials.share')
   @include('partials.suport')
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/js/universal.js"></script>
   <script src="/js/share.js"></script>
  </body>
</html>