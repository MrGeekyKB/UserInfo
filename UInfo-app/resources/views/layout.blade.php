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
      <a href="{{route('home.emp_data')}}">Employes</a>
      <a href="{{route('home.insert')}}">Insert Employes</a>
      <a href="{{route('home.update')}}">Update Employes</a>
      <a href="{{route('home.delete')}}">Delete Employes</a>
      <a href="{{route('home.index')}}">About us</a>
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