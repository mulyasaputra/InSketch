<footer class=" footer-bg w-100 position-relative overflow-hidden">
   <div class="infoBottom container text-dark pt-5 pb-5">
      <div class="infoLink mb-5">
        <div class="homeLink">
          <h2 class="fs-4 fw-semibold">InSketch</h2>
          <p class="fw-semibold lh-1" style="font-size: 12px;">Download the concept design only from InSketch.</p>
          <div class="iconLink d-flex mt-3">
            <a href="https://www.instagram.com/appsventory/" class="fab fa-instagram"></a>
            <a href="https://www.youtube.com/@Appsventory" class="fab fa-youtube"></a>
            <a href="https://github.com/mulyasaputra" class="fab fa-github"></a>
          </div>
        </div>
        <div class="menuLink">
          <div class="menu">
            <h2 onclick="show(this)" class="LMenu">Menu</h2>
            <a class="{{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            <a class="{{ ($title === "About") ? 'active' : '' }}" href="/about">About Us</a>
            <a type="button"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"  class="suport">Suport</a>
          </div>
          <div class="download">
            <h2 onclick="show(this)" class="LDownload">Download</h2>
            <a href="/download/vector">Vector</a>
            <a href="/download/logo">Logo</a>
            <a href="/download/code">CodeFree</a>
          </div>
          <div class="informasi">
            <h2 onclick="show(this)" class="LInfo">Further Information</h2>
            <a href="/license#tnc">Trems & Condition</a>
            <a href="/license">License</a>
          </div>
          <div class="apps">
            <h2 onclick="show(this)" class="LApps">Get App</h2>
            <a class="{{ ($title === "Get Apps") ? 'active' : '' }}" href="#Huawei">Apps Gallery</a>
            <a class="{{ ($title === "Get Apps") ? 'active' : '' }}" href="#Apple">App Store</a>
            <a class="{{ ($title === "Get Apps") ? 'active' : '' }}" href="#Android">Google Play Store</a>
          </div>
        </div>
      </div>
      <div class="copyright fw-semibold text-center align-self-center"><span id="cc"></span></div>
   </div>
   <div>
     <div class="wave"></div>
     <div class="wave"></div>
     <div class="wave"></div>
   </div>
</footer>
<!-- ButtonUp Section -->
<div class="button-up position-fixed rounded-circle d-flex justify-content-center align-items-center"><img src="/icons/up.svg" alt="button-up" /></div>