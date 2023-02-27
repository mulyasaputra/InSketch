<title>InSketch | {{ $title }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<!-- Section: Design Block -->
<style>.gradient-custom{background:#6a11cb;background:-webkit-linear-gradient(to right,rgba(106,17,203,1),rgba(37,117,252,1));background:linear-gradient(to right,rgba(106,17,203,1),rgba(37,117,252,1))}</style>
<section class="vh-100 gradient-custom">
   <div class="container py-5 h-100">
      <form action="" method="post">
         @csrf
         <div class="row d-flex justify-content-center align-items-center h-100">
           <div class="col-12 col-md-8 col-lg-6 col-xl-5">
             <div class="card bg-dark text-white" style="border-radius: 1rem;">
               <div class="card-body p-5 text-center">
                 <div class="mb-md-5 mt-md-4 pb-5">
                   <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                   <p class="text-white-50 mb-5">Please enter your login and password!</p>
                   <div class="form-outline form-white mb-4">
                     <input name="email" type="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" autofocus required placeholder="Email" value="{{ old('email') }}"/>
                     @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                     {{-- <label class="form-label" for="typeEmailX">Email</label> --}}
                   </div>
                   <div class="form-outline form-white mb-4">
                     <input name="password" type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" required placeholder="Password"/>
                     @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                     {{-- <label class="form-label" for="typePasswordX">Password</label> --}}
                   </div>
                   <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                   <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                 </div>
     
                 <div><p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a></p></div>
               </div>
             </div>
           </div>
         </div>
      </form>
   </div>
   @if (session()->has('success'))   
   <div class="alert alert-success alert-dismissible fade show position-absolute" role="alert" style="right: 20px; top: 20px">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
   @if (session()->has('loginError'))   
   <div class="alert alert-danger alert-dismissible fade show position-absolute" role="alert" style="right: 20px; top: 20px">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   @endif
 </section>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>