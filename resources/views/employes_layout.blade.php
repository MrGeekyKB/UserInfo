<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href='{{url('css/layout.css')}}'>
  </head>
  <body>
    <nav>
      <a href="{{route('home.index')}}">Home</a>
      <a href="{{route('employes.index')}}">All Employes</a>
      <a href="{{route('employes.insert')}}">Add Employes</a>

    </nav>
    <div class="">
      @yield('content')
    </div>
    <div class="">
      <footer>
        <h6>Copyrights Reserved KBiotics 2022</h6>
        <h6>Made with Love and Patience</h6>
      </footer>
    </div>
  </body>
</html>
