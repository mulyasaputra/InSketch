@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
<main id="herosection" class="vh-100 position-relative overflow-hidden">
   <div id="particles-js" class="position-absolute top-0 start-0 end-0 h-100" style="z-index: -5;"></div>
   <div class="h-100 container mt-5 pt-4  d-flex align-items-center justify-content-between">
      <div class="col-12 col-md-6 herosection text-center text-sm-start">
         <h1 class="fw-normal">Welcome to In<Span>Sketch</Span></h1>
         <p class="lead fw-normal">A collection of projects that I've worked on in the form and can be downloaded for free by anyone who finds this web site.
            On this website you can find various projects such as Web Design, UI design, Logo, Vectro, and SourceCode for the website</p>
         <a class="my-4 position-relative d-inline-block py-3 px-4 text-decoration-none text-uppercase" href="download">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Download
         </a>
         <p class="text-secondary">Abaikan saja ini website tidak berguna</p>
      </div>
      <div class="col-0 col-md-4 mx-auto d-md-inline d-none">
         <img class="w-100" src="assets/home.webp" alt="">
      </div>
   </div>
</main>
<section id="fileDownloader" class="pt-4 pb-5 text-center" style="background-color: var(--Passive);">
   <div class="container">
      <h4>Extension File</h4>
   </div>
</section>
<section id="lastProject">
   <div class="container py-5">
      <div class="row">
         <div class="col-md-10">
            <p class="mb-0">Check out some of our think</p>
            <h3 class="text-capitalize">Our latest works</h3>
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
         </div>
         <div class="col-md-2 align-middle d-md-flex align-items-center justify-content-end d-none" style="gap:10px">
            <i class="Fas-icon fa-solid fa-angle-left"></i>
            <i class="Fas-icon fa-solid fa-angle-right"></i>
         </div>
      </div>
      <div id="post-card" class="row mt-3 mb-4 flex-nowrap">
         @foreach ($discovers as $discover)
         <div class="col-xxl-3 col-lg-4 col-md-5 col-sm-8 position-relative">
            <img class="w-100" src="{{ $discover->thumbnail ?? '/assets/index_default.webp' }}" alt="">
            <div class="box-project position-absolute top-0 start-0 end-0 bottom-0 d-flex flex-column justify-content-between">
               <div class="row justify-content-between w-100 align-items-center mt-3 px-3" style="margin-left: -1px;">
                  <span class="text-light fw-light" style="font-family: sans-serif; padding: 4px 11px;background-color: #3a3a3a9a;border-radius: 50px;box-sizing: border-box;">{{ $discover->category->name }}</span>
                  <a href="/preview/{{ $discover->slug }}" class="fa-sharp fa-solid fa-arrow-right text-decoration-none text-light" style="background-color: #3a3a3a9a;padding: 4px 9px;border-radius: 100%;"></a>
               </div>
               <div class="titel" style="background: linear-gradient(180deg,rgba(0,0,0,0) 6.01%,rgba(0,0,0,.45) 66.29%);">
                  <h4 class="px-3 pt-3"><a href="/preview/{{ $discover->slug }}" class="text-decoration-none text-light">{{ $discover->name }}</a></h4>
                  <p class="mb-3 px-3" style="line-height: 18px">Download the concept design only from InSketch.</p>
               </div>
            </div>
         </div>
         @endforeach
      </div>
      <p class="text-center text-secondary">- Drag to Scroll Horizontally -</p>
   </div>
</section>
<section id="myVideo" style="background-color: var(--Passive);">
   <div class="container py-5">
      <div class="row justify-content-between">
         <div class="col-lg-5 mb-4 mb-lg-0">
            <h3>My Youtbe Channel</h3>
            <p class="mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit qui facere reiciendis! Unde non quisquam soluta et rerum voluptatibus, assumenda magni dolor molestiae vitae adipisci ipsa illum reprehenderit quos id?</p>
            <a class="mt-5 d-block text-white text-decoration-none" href="https://www.youtube.com/@Appsventory" target="_blank"><span style="text-decoration: underline;">Visite my channel </span><span class="ms-2 fasinc fa-sharp fa-solid fa-arrow-right"></span></a>
         </div>
         <div class="col-lg-6">
            <div class="plyr__video-embed" id="player">
               <iframe
                 src="https://www.youtube.com/embed/ixOqboW5ovY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                 allowfullscreen
                 allowtransparency
                 allow="autoplay"
               ></iframe>
             </div>
         </div>
      </div>
   </div>
</section>
<section id="testimonials" class="pt-4 pb-5">
   <div class="container">
      <div class="row d-flex justify-content-center">
         <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Testimonials</h3>
            <p class="mb-4 pb-2 mb-md-5 pb-md-0">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
            numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
            quisquam eum porro a pariatur veniam.
            </p>
         </div>
      </div>
      <div id="testimonialCard" class="row text-center flex-nowrap">
         <div class="col-lg-4 col-sm-8 my-2 d-flex">
            <div class="card testimonial-card">
            <div class="card-up" style="background-color: #9d789b;"></div>
            <div class="avatar mx-auto bg-white">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                  class="rounded-circle img-fluid" />
            </div>
            <div class="card-body">
               <h4 class="mb-4 text-dark">Maria Smantha</h4>
               <hr />
               <p class="text-dark mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet eos adipisci,
                  consectetur adipisicing elit.
               </p>
            </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-8 my-2 d-flex">
            <div class="card testimonial-card">
            <div class="card-up" style="background-color: #7a81a8;"></div>
            <div class="avatar mx-auto bg-white">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                  class="rounded-circle img-fluid" />
            </div>
            <div class="card-body">
               <h4 class="mb-4 text-dark">Lisa Cudrow</h4>
               <hr />
               <p class="text-dark mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Neque cupiditate assumenda in maiores
                  repudi mollitia architecto.
               </p>
            </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-8 my-2 d-flex">
            <div class="card testimonial-card">
            <div class="card-up" style="background-color: #6d5b98;"></div>
            <div class="avatar mx-auto bg-white">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                  class="rounded-circle img-fluid" />
            </div>
            <div class="card-body">
               <h4 class="mb-4 text-dark">John Smith</h4>
               <hr />
               <p class="text-dark mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                  aliquam repellat rem unde ducimus.
               </p>
            </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-8 my-2 d-flex">
            <div class="card testimonial-card">
            <div class="card-up" style="background-color: #6d5b98;"></div>
            <div class="avatar mx-auto bg-white">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                  class="rounded-circle img-fluid" />
            </div>
            <div class="card-body">
               <h4 class="mb-4 text-dark">John Smith</h4>
               <hr />
               <p class="text-dark mt-4">
                  <i class="fas fa-quote-left pe-2"></i>Delectus impedit saepe officiis ab
                  aliquam repellat rem unde ducimus.
               </p>
            </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section  id="contact" class="contact pt-4 pb-5 position-relative" style="background-color: var(--Passive);">
   <div id="ctaAnimation" class="position-absolute top-0 start-0 end-0 bottom-0 z-0"></div>
   <div class="container">
      <div class="text-center">
         <h3 class="mb-4">Contact Me</h2>
         <p class="w-75 m-auto mb-4 pb-2 mb-md-5 pb-md-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus pariatur magnam unde tempora dolorum illo architecto illum obcaecati voluptate odio?</p>   
      </div>
      <form action="/GetTelegram" method="post" class="position-relative z-2">
         @csrf
         <div class="box-input mt-3">
            <input class="w-100 p-2 rounded-2 @error('name') is-invalid @enderror" type="text" name="name" id="name" required placeholder="Name" value="{{ old('name') }}">
             @error('name') <div class="invalid-feedback text-white">{{ $message }}</div> @enderror
         </div>
         <div class="box-input mt-3">
            <input class="w-100 p-2 rounded-2 @error('email') is-invalid @enderror" type="email" name="email" id="email" required placeholder="youremail@mail.com" value="{{ old('email') }}">
             @error('email') <div class="invalid-feedback text-white">{{ $message }}</div> @enderror
         </div>
         <div class="box-input mt-3">
            <textarea class="w-100 p-2 rounded-2 @error('message') is-invalid @enderror" name="message" id="message" rows="10" required placeholder="How can I help">{{ old('message') }}</textarea>
             @error('message') <div class="invalid-feedback text-white">{{ $message }}</div> @enderror
         </div>
         <button type="submit" name="submit" class="w-100 mt-3 py-2 btn btn btn-primary">Submit</button>
      </form>
   </div>
</section>
@if (session()->has('message'))   
<div class="alert alert-success alert-dismissible fade show position-absolute" role="alert" style="right: 20px; bottom: 20px;">
   {{ session('message') }}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
{{-- Script JavaSvript --}}
<script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>
<script>
   const player = new Plyr('#player');
</script>
<script src="js/home.js"></script>
<script src="js/particles.min.js"></script>
<script>
   particlesJS.load("particles-js", "json/particlesjs.json", function () {});
   particlesJS.load("ctaAnimation", "json/particles.json", function () {});
 </script>
@endsection