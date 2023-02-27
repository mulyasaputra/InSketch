<title>InSketch | {{ $title }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- Section: Design Block -->
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden vh-100">
   <style>
     .background-radial-gradient {
       background-color: hsl(218, 41%, 15%);
       background-image: radial-gradient(650px circle at 0% 0%,
           hsl(218, 41%, 35%) 15%,
           hsl(218, 41%, 30%) 35%,
           hsl(218, 41%, 20%) 75%,
           hsl(218, 41%, 19%) 80%,
           transparent 100%),
         radial-gradient(1250px circle at 100% 100%,
           hsl(218, 41%, 45%) 15%,
           hsl(218, 41%, 30%) 35%,
           hsl(218, 41%, 20%) 75%,
           hsl(218, 41%, 19%) 80%,
           transparent 100%);
     }
 
     #radius-shape-1 {
       height: 220px;
       width: 220px;
       top: -60px;
       left: -130px;
       background: radial-gradient(#44006b, #ad1fff);
       overflow: hidden;
     }
 
     #radius-shape-2 {
       border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
       bottom: -60px;
       right: -110px;
       width: 300px;
       height: 300px;
       background: radial-gradient(#44006b, #ad1fff);
       overflow: hidden;
     }
 
     .bg-glass {
       background-color: hsla(0, 0%, 100%, 0.9) !important;
       backdrop-filter: saturate(200%) blur(25px);
     }
   </style>
 
   <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
     <div class="row gx-lg-5 align-items-center mb-5">
       <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
         <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
           The best offer <br />
           <span style="color: hsl(218, 81%, 75%)">for your business</span>
         </h1>
         <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
           Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Temporibus, expedita iusto veniam atque, magni tempora mollitia
           dolorum consequatur nulla, neque debitis eos reprehenderit quasi
           ab ipsum nisi dolorem modi. Quos?
         </p>
       </div>
 
       <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
         <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
         <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
 
         <div class="card bg-glass">
           <div class="card-body px-4 py-5 px-md-5">
             <form method="POST" action="/register">
               @csrf
               <div class="form-outline mb-4">
                  <label class="form-label" for="name">Name</label>
                 <input name="name" type="text" id="name" class="form-control @error('name') is-invalid @enderror" required value="{{ old('name') }}"/>
                 @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
               </div>
               <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                 <input name="username" type="text" id="username" class="form-control @error('username') is-invalid @enderror" required value="{{ old('username') }}"/>
                 @error('username') <div class="invalid-feedback">{{ $message }}</div> @enderror
               </div>
               <div class="form-outline mb-4">
                  <label class="form-label" for="email">Email address</label>
                 <input name="email" type="email" id="email" class="form-control @error('email') is-invalid @enderror" required value="{{ old('email') }}"/>
                 @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
               </div>
               <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                 <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" required/>
                 @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
               </div>
               <button type="submit" class="w-100 btn btn-primary btn-block mb-4">Register</button>
             </form>
             <div><p class="mb-0 text-center">You have an account  <a href="/login" class="text-dark fw-bold text-decoration-none">Sign In</a></p></div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>
<!-- Section: Design Block -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>