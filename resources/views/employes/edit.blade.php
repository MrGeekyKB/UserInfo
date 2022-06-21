@extends('employes_layout')
@section('content')
<h1>Update Data</h1>
<div class="" style=" margin: auto; margin-top: 150px;background-color: rgb(255, 255, 255); box-shadow: 10px 10px 50px gray; width: 50%; padding: 15px">
  <form class="" action="{{Route('employes.update', ['employe' => $employe['id']])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="file" name="image" placeholder="Choose image" id="image"><br>
    @error('image')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
    <label for="">First Name</label><br>
    <input type="text" name="fname" value="{{ $employe->fname }}"><br>
    @error('fname')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Last Name</label><br>
    <input type="text" name="lname" value="{{ $employe->lname }}"><br>
    @error('lname')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Mobile No</label><br>
    <input type="text" name="mobile" value="{{ $employe->mobile }}"><br>
    @error('mobile')<div class="form-error">{{$message}}</div>@enderror
    <label for="">Birf</label><br>
    <textarea name="birf" rows="8" cols="80">{{ $employe->birf }}</textarea><br>
    <input type="submit" name="" value="Submit">
  </form>
</div>
@endsection
