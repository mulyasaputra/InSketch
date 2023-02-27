@extends('layouts.main')
@section('container')
{{-- {{ dd(($lang == null || !$lang) ? 'en' : $lang) }} --}}
<div class="flex-fill">
   <link rel="stylesheet" href="css/about.css">
   <div id="edge-js" class="position-absolute top-0 start-0 end-0 bottom-0" style="z-index: -5;"></div>
   <div class="container my-5 pt-4">
      <div class="row mt-4" style="--bs-axis-w: 28.1%;">
         @foreach ($translate->{($lang == null || !$lang) ? 'en' : $lang} as $data)
         <div class="col-fiil">
            <img class="border border-4 border-white w-100" src="assets/pic.jpg" alt="">
            <h2 class="mt-3">{{ $data->name }}</h2>
            <div class="icon mt-3">
               <a href="#" class="fab fa-github text-decoration-none" style="--axis-color:#333; --axis: 5.9em;"><span>Github</span></a>
               <a href="#" class="fab fa-instagram text-decoration-none" style="--axis-color:#e1306c; --axis: 7.7em;"><span>Instagram</span></a>
               <a href="#" class="fab fa-youtube text-decoration-none" style="--axis-color:#ff0000; --axis: 6.8em;"><span>Youtube</span></a>
               <a href="#" class="fab fa-telegram text-decoration-none" style="--axis-color:#0088cc; --axis: 7.3em;"><span>Telegram</span></a>
            </div>
            <select id="translate" class="form-select mt-4" aria-label="Default select example">
               <option {{ ($lang === "en") ? 'selected' : '' }} value="en">English</option>
               <option {{ ($lang === "id") ? 'selected' : '' }} value="id">Indonesian</option>
               <option {{ ($lang === "jp") ? 'selected' : '' }} value="jp">Japanese</option>
               <option {{ ($lang === "jv") ? 'selected' : '' }} value="jv">Javanese</option>
             </select>
         </div>
         <div class="col-full">
            <h3>{{ $data->h1->about }}</h3>
            <p>{{ $data->body->about }}</p>
            <h3 class="mt-4">{{ $data->h1->desk }}</h3>
            <p>{{ $data->body->about }}</p>
            <div class="row mt-4">
               <div class="col-6">
                  <h3>{{ $data->h1->skill }}</h3>
                  <ul>
                     @foreach ( $data->body->skill as $child)
                     <li>{{ $child }}</li>
                     @endforeach
                  </ul>
               </div>
               <div class="col-6">
                  <h3>{{ $data->h1->tools }}</h3>
                  <ul>
                     @foreach ( $data->body->tools as $child)
                     <li>{{ $child }}</li>
                     @endforeach
                  </ul>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
<script src="js/particles.min.js"></script>
<script>
   particlesJS.load("edge-js", "json/edge.json", function () {});
   $("#translate").change(function() {
      var selectedVal = $("#translate option:selected").val();
      location.href = "?lang="+selectedVal;
   });
 </script>
@endsection