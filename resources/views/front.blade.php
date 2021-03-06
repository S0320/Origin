<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','TICKET')</title>

    <script src="{{ secure_asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=raleway:300,400,600" rel="stylesheet" type="text/css">

    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/front.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('parts/header')

    <main>
      <div class="container py-4">
        <div class="position-relative">
          <img src="{{ secure_asset('image/movie-theater.png') }}" alt="" class="img-fluid">
          <div class="position-absolute main-imgtextbox">
            <p class="pl-1">TICKETとは</p>
            <p class="pl-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
          </div>
        </div>
        <h1>トップページ</h1>
        <h2 class="text-title">新着記事</h2>
      </div>
    </main>

    @include('parts/footer')
  </body>
</html>