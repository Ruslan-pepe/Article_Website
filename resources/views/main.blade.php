<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css" rel="stylesheet">
  <title>@yield('title')</title>
  <style>
    @yield('style')
    .worse{
      width: 100%;
      height: 80px;
      transition-duration: 1s;
      z-index: 2;
      position: fixed;
      background-color: #ffffff;
    }
    .links {
      font-weight: bolder;
      color: rgb(0, 0, 0);
      padding: 0 25px;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
      transition-duration: 1s;
      font-size: 14px;
    }
    .wor{
      display: flex;
      justify-content: flex-end;
    }
    body{
      transition-duration: 1s ;
      background: rgba(255, 255, 255, 0.2);
    }
    body>p{
      font-weight: bolder;
      color: rgb(0, 0, 0);
    }
  </style>
</head>
  <body>
  @include('header')
    @yield('content')
  </body>
  @yield('script')
  @include('footer')

  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/src/lang/ru.js"></script>
  <script>
    // let header = document.querySelector('.worse')
    // let links = document.querySelectorAll('.links')
    // let body = document.querySelector('body')
    // function setColorBodyHeaderLinks() {
    //   window.onscroll = function () {
    //     if (window.scrollY > 100){
    //       // body.style.background = 'rgba(255,204,255,.2)'
    //       header.style.background = 'rgba(255,255,255,.7)'
    //       for (let i = 0; i < links.length; i++) {
    //         links[i].style.color = 'rgb(0,6,16)'
    //       }
    //     }
    //     else {
    //       // body.style.background = 'rgba(255,204,204,.2)'
    //       header.style.background = 'rgba(0,0,0,0)'
    //       for (let j = 0; j < links.length; j++) {
    //         links[j].style.color = 'rgb(172,190,210)'
    //       }
    //     }
    //   }
    // }
    //
    // setColorBodyHeaderLinks()
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

