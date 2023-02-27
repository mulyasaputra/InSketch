let text = 'PaketIn UI WebDesign in Figma';
copyText.onclick = () => {
   linkID.select();
   document.execCommand("copy");
};
// // Modal Box
function showShare() {
   $(".modal-wrapper1").addClass("open");
}
$("#closeBtn1").click(function () {
   $(".modal-wrapper1").removeClass("open");
});
$("#bar input").val(window.location.href);
  // Button Share
$(".Facebook").on("click", function () {
   window.open(`https://www.facebook.com/dialog/share?app_id=87741124305&href=${window.location.href}`, `_blank`);
 });
 $(".Whatsapp").on("click", function () {
   window.open(`whatsapp://send?text=${text}%20%2D%20${window.location.href}`, `_blank`);
 });
 $(".Telegram").on("click", function () {
   window.open(
     `https://telegram.me/share/url?url=${window.location.href} & text=Ada%20yang%20keren%20lho,%20nyesel%20kalo%20ga%20buka...`,
     `_blank`
   );
 });
 $(".Pinterent").on("click", function () {
   window.open(
     `https://www.pinterest.com/pin/create/button/?url=${window.location.href}%26feature%3Dshare&description=Download%20the%20concept%20design%20only%20from%20InSketch.&is_video=false&media=https://cdn.dribbble.com/users/7368765/screenshots/16026817/media/9affcfaf82262907e176650c563f2d8a.png`,
     `_blank`
   );
 });
 $(".Twitter").click(function () {
   window.open(
     `https://twitter.com/home?status=${text}%20here%20${window.location.href}?url=${window.location.host}`,
     `_blank`
   );
 });
 $(".Reddit").click(function () {
   window.open(`https://reddit.com/submit?url=${window.location.href}&title=${text}`, `_blank`);
 });
 $(".Tumblr").click(function () {
   window.open(
     `https://www.tumblr.com/share/link?url="${window.location.href}"&name="${text}"`,
     `_blank`
   );
 });