@extends('layouts.main')
@section('container')
<div class="container my-5 pt-5">
   <div class="row" style="cursor: default">
      <div class="slidebar col-12 col-md-3 d-none d-md-inline">
         <h3>InSketch</h3>
         <ul class="Link">
            <li id="Btn1">License</li>
            <li id="Btn2">Privacy Policy</li>
            <li id="Btn3">Terms & Conditions</li>
         </ul>
      </div>
      <div class="mainbar col-md-9">
         <section class="License">
            <h3 class="fs-2">License</h3>
            <p>Semua file yang ada di InSketch dapat di unduh dan dapat digunakan
            secara bebas oleh siapapun yang berhasil menemukan website ini</p>
            <div class="text1">
               <h4 class="mt-4">Lisensi kami mencerminkan hal berikut.</h4>
               <ul>
                  <li>Semua file dapat diunduh dan digunakan secara gratis</li>
                  <li>Dapata di gunakan untuk tujuan komersial dan non-komersial</li>
                  <li>Tidak diperlukan izin (meskipun atribusi dihargai!)</li>
               </ul>
            </div>
            <div class="text2">
               <h4 class="mt-4">Apa yang tidak diizinkan.</h4>
               <ul>
                  <li>Aset vector tidak dapat dijual tanpa modifikasi yang signifikan.</li>
                  <li>Aset tidak dapat digukanan untuk mereplikasi layanan serupa atau bersaing.</li>
               </ul>
            </div>
            <div class="text3">
               <h4 class="mt-4">Keterangan lebih lanjut.</h4>
               <p>Kami memberi Anda lisensi hak cipta yang tidak dapat dibatalkan,
                  non-eksklusif, di seluruh planet untuk mengunduh, menyalin,
                  memodifikasi, menampilkan, dan menggunakan semua aset dari
                  InSketch secara gratis, termasuk untuk tujuan komersial, tanpa
                  izin dari InSketch. Lisensi ini tidak termasuk hak untuk
                  mengkompilasi file dari InSketch untuk mereplikasi layanan serupa
                  atau bersaing.</p>
            </div>
            <div class="tips">
               <h4 class="mt-4">Tip: Cara memberi atribusi</h4>
               <p>Meskipun atribusi tidak diperlukan, kami menghargainya karena dapat mendorong kami untuk terus berbagi.</p>
               <div class="kotak mt-4">
                  <span>
                     Desain by <a class="fw-semibold text-decoration-none text-white" href="http://instagram.com/Appsventory" target="_blank|">Appsventory</a> on
                     <a class="fw-semibold text-decoration-none text-white" href="{{$_SERVER['REQUEST_URI']}}" target="_blank|"> InSketch</a>
                  </span>
               </div>
            </div>
         </section>
         <section class="Privacy mt-5 mt-md-0 d-md-none">
            <h3 class="fs-2">Privacy Policy</h3>
            <p>InSketch tidak pernah mengambil data dari perangkat anda, karena
            Team InSketch belum bisa mengembangkan teknologi seperti itu. suatu
            saat itu akan terjadi di website ini</p>
         </section>
         <section class="Terms mt-5 mt-md-0 d-md-none">
            <h3 class="fs-2">Terms & Conditions</h3>
            <p>Kami belum memikirkan itu, mungkin suatu saat kami akan membuatnya</p>
         </section>
      </div>
   </div>
</div>
<style>
:is(.slidebar,.mainbar) * {
   font-family: Montserrat,sans-serif;
}
.kotak {
   background: rgb(78 78 78 / 55%);
   border-left: 5px solid var(--White);
   padding: 18px;
   text-align: left;
   color: var(--Clear);
   font-weight: 400;
   border-radius: 0 5px 5px 0;
}
</style>
@endsection