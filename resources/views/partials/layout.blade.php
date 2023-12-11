<!doctype html>
<html data-theme="dracula" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
@include('partials.nav')


<style>
    .hero{
        background-image: 
        url("https://images.unsplash.com/photo-1571091718767-18b5b1457add?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGJ1cmdlcnxlbnwwfHwwfHx8MA%3D%3D");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }   
</style>

<section class="hero is-medium">
  <div class="hero-body">
  <p class="subtitle" style="font-size: 50px; color:white">
      Welcome to
    </p>
    <p class="title" style="font-size: 80px; color:white">
      Burger Box
    </p>
  </div>
</section>


@yield('content')
</body>
</html>
