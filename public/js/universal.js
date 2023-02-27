// Hak Copta
date = new Date();
tahun = date.getFullYear();
var hakCipta =
    "Hak cipta" +
    " © 2019 - " +
    tahun +
    " InSketch. Seluruh hak cipta dilindungi oleh siapa.";
if (cc = document.getElementById("cc")){
   cc.innerHTML = hakCipta;
}
// Button Up
$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 200) {
            $(".button-up").addClass("show");
        } else {
            $(".button-up").removeClass("show");
        }
    });
    // slide-up script
    $(".button-up").click(function () {
        $("html").animate({ scrollTop: 0 });
        $("html").css("scrollBehavior", "auto");
    });
});
// Navbar onClock
$(".logo").on("click", function () {
    window.open("/", "_self");
});
// toggle menu/navbar script
$(".menu-btn").click(function () {
    $(".menu .daftar").toggleClass("active");
    $(".menu-btn i").toggleClass("active");
});
// Animasi
function show(e) {
    $(e).toggleClass("active");
    $(e).closest("div").toggleClass("active");
}
