@extends('layout')
@section('content')
<h1>Insert Data</h1>
<div class="form">
  <form class="" action="{{Route('emp_data.store')}}" method="post">
    @csrf
    <label for="">First Name</label><br>
    <input type="text" name="fname" value=""><br>
    <label for="">Last Name</label><br>
    <input type="text" name="lname" value=""><br>
    <label for="">Mobile No</label><br>
    <input type="text" name="mobile" value=""><br>
    <label for="">Birf</label><br>
    <textarea name="birf" rows="8" cols="80"></textarea><br>
    <input type="submit" name="" value="Submit">
  </form>
</div>
@endsection
