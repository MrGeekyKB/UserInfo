@extends('employes_layout')
@section('content')
<h1>Insert Data</h1>
<div class="" style=" margin: auto; margin-top: 150px;background-color: rgb(255, 255, 255); box-shadow: 10px 10px 50px gray; width: 50%; padding: 15px">
  <form class="" action="{{Route('employes.store')}}" method="post" enctype="multipart/form-data">
    @csrf
      <input type="file" name="image" placeholder="Choose image" id="image"><br>
      @error('image')
      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
    <label for="">First Name</label><br>
    <input type="text" name="fname" value="{{old('fname')}}"><br>
    @error('fname')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Last Name</label><br>
    <input type="text" name="lname" value="{{old('lname')}}"><br>
    @error('lname')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Mobile No</label><br>
    <input type="text" name="mobile" value="{{old('mobile')}}"><br>
    @error('mobile')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Birf</label><br>
    <textarea name="birf" rows="8" cols="80">{{old('birf')}}</textarea><br>
    <input type="submit" name="" value="Submit">
  </form>
</div>
@endsection
