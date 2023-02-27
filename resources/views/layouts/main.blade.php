<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Meta Browser Phone -->
    <meta name="theme-color" content="#1b1b1d" />
    <meta name="msapplication-navbutton-color" content="#1b1b1d" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#1b1b1d" />
    <!-- End Meta Browser -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/universal.css">
    <script src="/vendor/jquery/jquery.min.js"></script>
    <title>InSketch | {{$title}}</title>
  </head>
  <body class="d-flex flex-column justify-content-between min-vh-100" style="background: var(--Non-Aktif); color: var(--White);">
   @include('layouts.navbar')
   @yield('container')
   @include('layouts.footer')
   <!-- Modal -->
   @include('partials/suport')
   {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="/js/universal.js"></script>
   <script src="/js/share.js"></script>
  </body>
</html>
