<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta Browser Phone -->
   <meta name="theme-color" content="#1b1b1d" />
   <meta name="msapplication-navbutton-color" content="#1b1b1d" />
   <meta name="apple-mobile-web-app-status-bar-style" content="#1b1b1d" />
   <!-- End Meta Browser -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="/css/universal.css">
   <style>*{font-weight: 500 !important;}.fa, .fas {font-weight: 900 !important;}.navbar {background: var(--Dark)!important;position: sticky !important;}#download{color: rgba(var(--bs-link-color-rgb),var(--bs-link-opacity,1));text-decoration: underline;cursor: pointer;}</style>
   <title>Short URL | {{ $title }}</title>
</head>
<body>
   @include('layouts.navbar')
   <div class="container mt-3">
      <article>
         <h2>Lorem ipsum dolor sit amet.</h2>
         <div class="w-100 mb-3">
            <span id="time1" class="text-center w-100 d-block">10 second</span>
            <a id="click" class="text-center w-100 d-none" href="#time2" onclick="thisTimes()">Double click</a>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus necessitatibus esse cumque officiis laboriosam non totam ipsa ipsam quam suscipit maxime blanditiis, amet rem dignissimos. Ex ducimus laborum et omnis ipsum voluptatem, veniam voluptate iste, aliquam, qui a perspiciatis dolore asperiores similique soluta deleniti ab. Soluta libero sit cupiditate eos, temporibus enim quidem. Dicta labore exercitationem laboriosam, sunt ipsam esse repellendus reprehenderit eligendi, minima, voluptatibus quaerat excepturi. Officia saepe iusto, beatae corrupti debitis eveniet doloremque distinctio aliquid tenetur numquam officiis culpa magni cupiditate ipsum porro corporis facere totam repudiandae vel iste, earum minima ullam. Quia illo aliquid nemo unde mollitia quisquam eius nulla numquam culpa non dolorum, ad enim? Ratione id perferendis tempore, adipisci aspernatur, dignissimos molestias ab amet illum, repellendus aliquid? In excepturi dignissimos adipisci. Sequi aliquid aliquam quia fugiat nam odio natus sed ad ratione culpa nisi distinctio incidunt aut, quidem libero tempore. Assumenda enim commodi cumque officiis, numquam quibusdam vero temporibus libero autem tenetur similique veniam mollitia saepe veritatis tempora qui laudantium, ea dolorum dolorem optio vitae expedita sit aut? Explicabo cupiditate, assumenda cum perferendis cumque est eveniet quia rerum hic impedit officiis iure necessitatibus facilis, nesciunt velit accusamus reprehenderit consequuntur. Inventore accusamus expedita ex asperiores ut.</p>
         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae amet sint nulla sequi quos nihil ullam sed recusandae cumque adipisci doloremque pariatur, ex maiores eius repudiandae impedit quisquam labore. Dolor consectetur at tenetur sunt ex quos vero corrupti numquam ullam voluptas possimus, non maiores ducimus atque! Expedita, eligendi. Omnis, aspernatur.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe dolores in, rem quidem neque earum quisquam nobis cum, quam tempore amet! Quisquam aliquam provident quod cum accusamus dicta, quaerat veniam laudantium odit ab cupiditate doloremque? Consequuntur libero autem ratione aliquid tenetur quasi earum eos, nihil voluptatibus iste voluptas maxime. Alias modi repudiandae rerum quia repellendus quae dicta distinctio aliquam maxime aliquid ex odit autem nihil quibusdam, ipsam totam iusto magni suscipit odio vitae architecto, repellat placeat hic at.  Deserunt inventore quasi molestias quam, rerum optio quisquam ea eos distinctio. </p>
         <div class="ads w-100 bg-danger" style="height: 5em"></div>
         <p>Dolor voluptatibus iure tempora magni reiciendis? Voluptate consectetur iure explicabo alias dolorum. Id quo optio molestias cum unde aspernatur et, molestiae similique iste facilis eligendi recusandae magni adipisci at ad quaerat dolor corporis aut quis eos voluptas suscipit sit libero rerum! Ipsa praesentium eaque soluta ipsum mollitia, doloremque tenetur quibusdam sed quam odit fugiat numquam perspiciatis aliquam laudantium cum repellat possimus consequatur repudiandae fuga. Minima quisquam quod nisi ullam commodi consequatur quidem? Vitae at quibusdam nemo eos non aut dolore velit esse dolorum impedit officiis rem, dolor, error atque sapiente rerum! Laboriosam repudiandae ut, harum veritatis nobis rerum quod! Accusantium sit saepe, numquam culpa veniam veritatis mollitia perferendis voluptate quo itaque molestiae blanditiis voluptatibus, aspernatur fuga fugit harum. Nostrum repellat ad nihil, quod rerum quos accusamus ipsum quae reiciendis animi repellendus velit earum, et culpa corporis aspernatur totam numquam magni assumenda deserunt expedita natus obcaecati voluptatum tempora. Eligendi veritatis qui aliquam odio provident illum doloremque quibusdam repudiandae, ex suscipit autem, eius ad est quis culpa veniam dignissimos doloribus commodi magnam ipsa reprehenderit quia iste expedita necessitatibus. Eum maxime, illo reiciendis nesciunt commodi odio cum id dolorem eius magni nam ipsa, aut sint excepturi. Quas, eaque. Tempore corrupti hic odio rem harum recusandae nesciunt, possimus temporibus incidunt at aliquam labore consequuntur reprehenderit?</p>
         <div class="w-100 mb-3 ">
            <span id="time2" class="text-center w-100 d-none">5 second</span>
            <span id="download" class="text-center w-100 d-none">Download</span>
         </div>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi optio blanditiis sapiente commodi, quas quos recusandae, suscipit labore eveniet dolorum sequi ratione quam nobis aliquid placeat atque voluptatum rerum nemo nisi tenetur magni corporis? Suscipit nobis odio nisi, est modi vel alias explicabo corporis culpa! Impedit quia voluptate molestias nesciunt.</p>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi earum dolorem ipsam sequi delectus inventore animi, et iusto aliquid. Ab quas animi fugit enim nam maiores ipsa iste deserunt, veniam molestias, ipsum velit aliquam omnis, incidunt earum blanditiis corporis quo eveniet dignissimos quia ducimus molestiae cumque dolore? Vel mollitia autem esse accusamus amet repellendus dolores sint earum quidem, ad commodi minima modi! Provident quis facere ad magnam dignissimos ex alias ea? Esse maiores alias consequuntur nobis id facere, numquam cum neque pariatur assumenda laudantium minima, dolorem enim. Debitis, aperiam labore saepe cupiditate consectetur quos, sint velit vel blanditiis repellendus voluptatibus atque veritatis accusamus tenetur nesciunt adipisci temporibus vitae nobis, eveniet sequi. Non saepe fugit, repudiandae corrupti laborum alias ducimus officia ea neque inventore porro voluptatum fugiat ut doloribus est nihil nostrum, temporibus molestias sunt quo expedita. Reprehenderit molestiae repudiandae, odit laborum dolor ut explicabo minima repellendus maxime a temporibus porro sunt quod labore incidunt libero, harum accusantium. Numquam totam aut placeat magnam dolorum veritatis molestiae, quisquam expedita accusamus et doloribus harum ipsum mollitia voluptatum reiciendis modi velit ipsam ratione. Error maiores laudantium quas ipsa, voluptates dolores sequi quidem suscipit itaque consequatur in eum impedit earum perspiciatis doloribus, quod assumenda illum.</p>
      </article>
   </div>
   <footer class="my-3 container"><span class="d-block text-dark border-top w-100 text-center pt-2">Best ShortURL By <a class="text-decoration-none text-dark fw-semibold"  href="#">{{ $title }}</a> from <a class="text-decoration-none text-dark fw-semibold" href="/">InSketch</a> for You</span></footer>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/js/universal.js"></script>
   <script>
      function thisTime(time, idTime, idBotton){
         var timeleft = 0;
         var downloadTimer = setInterval(function(){
            if(timeleft >= time){
               clearInterval(downloadTimer);
               setTimeout(function(){
                  $( idTime ).removeClass("d-block").addClass("d-none");
                  $( idBotton ).removeClass("d-none").addClass("d-block");
               }, 1000)
            }
            $(idTime).html(time - timeleft + ' second');
            timeleft += 1;
         }, 1000);
      }
      thisTime(10, '#time1', '#click');
      function thisTimes(){
         $( '#click' ).removeClass("d-block").addClass("d-none");
         $('#time2').removeClass("d-none").addClass("d-block");
         thisTime(5, '#time2', '#download');
      }
      $('#download').click(function(){
         window.open('/','_blank');
         window.location.href='http://insketch.rf.gd/';
      })
   </script>
</body>
</html>