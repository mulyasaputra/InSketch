<nav class="w-100 position-fixed navbar py-3">
   <div class="container d-flex justify-content-between align-items-center">
      <div class="logo fs-4 fw-semibold lh-1">In<span>Sketch</span></div>
      <div class="menu">
         <ul class="daftar d-flex align-items-center m-auto">
            @auth()
            <a href="/dashboard" id="Dashboard" class="{{ ($title === "Home") ? 'fw-semibold' : '' }}">Dashboard </a>
            @else
            <a href="/" class="{{ ($title === "Home") ? 'active' : '' }}" id="Welcome">Welcome </a>
            @endauth
            <a href="/download" class="{{ ($title === "Download") ? 'active' : '' }}" id="Download">Download</a>
            <a href="/license" class="{{ ($title === "License") ? 'active' : '' }}" id="License">License</a>
            <a href="/blog" class="{{ ($title === "Posts") ? 'active' : '' }}" id="Blog">Blog</a>
            <button type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="suport lh-1 ms-3 rounded-pill border-0 px-4 py-2">Suport</button>
         </ul>
        <div class="menu-btn d-none fs-5">
          <i class="fas fa-bars"></i>
        </div>
      </div>
   </div>
</nav>