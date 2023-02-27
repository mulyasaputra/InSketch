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
    <style>*{font-weight: 500 !important;}.fa, .fas {font-weight: 900 !important;}.navbar {background: var(--Dark)!important;position: sticky !important;}.share i{background-color:var(--color);padding:10px;color:var(--Clear);border-radius:3px}</style>
    <title>InSketch | {{$post->title}}</title>
  </head>
  <body class="d-flex flex-column justify-content-between min-vh-100">
   @include('layouts.navbar')
   <section id="contain" class="container mt-3 mb-5 flex-fill">
      <div class="mb-3">
         <a class="text-decoration-none text-dark" href="/">Home&nbsp;&nbsp;</a>
         <i class="fas fa-angle-right"></i>
         <a class="text-decoration-none text-dark" href="/download">&nbsp;&nbsp;Download&nbsp;&nbsp;</a>
         <i class="fas fa-angle-right"></i>
         <span class="pe-none">&nbsp;&nbsp;{{ $post->type }} - {{ $post->title }}</span>
      </div>
      <div class="row">
         <div class="col-12 col-md-8">
            <div class="ratio ratio-4x3 overflow-hidden w-100">
               <div><img class="w-100 position-absolute top-50 start-50 translate-middle" src="{{ $post->img }}" alt="gambar" /></div>
            </div>
            <div class="share mt-2 mb-3 w-100 text-end">
               <i style="--color: #4267b2" class="fab fa-facebook-f Facebook"></i>
               <i style="--color: #1da1f2" class="fab fa-twitter Twitter"></i>
               <i style="--color: #e60023" class="fab fa-pinterest-p Pinterent"></i>
               <i style="--color: #25d366" class="fab fa-whatsapp Whatsapp"></i>
               <i style="--color: #229ed9" class="fab fa-telegram-plane Telegram"></i>
               <i style="--color: #ff4500" class="fab fa-reddit-alien Reddit"></i>
               <i style="--color: #36465d" class="fab fa-tumblr Tumblr"></i>
            </div>
            <section>{!! $post->body !!}</section>
         </div>
         <div class="col-md-4 pe-0 mt-mc-3 row flex-row-reverse row-md-none row-mc-none">
            <div class="pe-0 col-4 position-relative d-mc-none">
               <a href="">
                  <img class="w-100 d-none d-md-block" alt="Adsafelink | Shorten your link and earn money" src="https://dummyimage.com/300x250&text=300x250+Ads+here"/>
                  <img class="w-100 d-md-none d-block" alt="Adsafelink | Shorten your link and earn money" src="https://dummyimage.com/300x450&text=300x450+Ads+here"/>
               </a>
               <div class="position-absolute top-0 end-0 mt-2 me-2">
                  <i class="fas fa-exclamation-circle me-1" title="Ad from Appsventory"></i>
                  <i class="fas fa-times" title="Hiden"></i>
               </div>
            </div>
            <div class="pe-0 col-8 mt-0 mt-md-4">
               <h2 class="fs-4 fw-semibold d-none d-md-block">Download {{ $post->type }} {{ $post->title }}</h2>
               <div>
                  <div class="bg-dark-subtle w-100 py-1 ps-2"><i class="fas fa-tags"></i> Tag :</div>
                  <div class="mb-4 mt-3 d-flex flex-wrap" style="gap: 9px;">
                     @php $tags = explode(',', $post->tag);@endphp
                     @foreach($tags as $tag)
                     <span class="px-3 py-2 rounded-pill" style="background-color: rgba(218, 218, 218, 0.514)">{{ trim($tag) }}</span>
                     @endforeach
                  </div>
               </div>
               <div>
                  <table class="table">
                     <thead>
                        <tr class="bg-dark-subtle">
                           <th scope="col" class="py-1 ps-2"><i class="fas fa-image"></i> Type</th>
                           <th scope="col" class="py-1 ps-2"><i class="fas fa-file-archive"></i> File type</th>
                           <th scope="col" class="py-1 ps-2"><i class="fas fa-cloud-upload-alt"></i> File size</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td>{{ $post->type }}</td>
                           <td>{{ $post->file_type }}</td>
                           <td>{{ $post->file_size }}</td>
                        </tr>
                     </tbody>
                  </table>
                  <a class="btn btn-dark w-100 py-2" href="/link/{{ $post->slug }}">Download</a>
               </div>
            </div>
         </div>
      </div>
   </section>
   @include('layouts.footer')
   {{-- Componen --}}
   @include('partials.suport')
   <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/js/universal.js"></script>
   <script src="/js/share.js"></script>
  </body>
</html>