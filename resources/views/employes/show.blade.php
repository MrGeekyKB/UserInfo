@extends('employes_layout')
@section('content')
<div class="" style=" margin: auto; margin-top: 150px;background-color: rgb(255, 255, 255); box-shadow: 10px 10px 50px gray; width: 50%; padding: 15px">
    <p>Name: {{$employe['fname']}}</p>
    <p>Contact: {{$employe['mobile']}}</p>
    <p>Birf: {{$employe['birf']}}</p>
    <p>Birf: {{asset('storage/images/'.$employe->name)}}</p>
    <img src="{{asset('storage/images/'.$employe->name)}}" alt="hii" height="200" width="200">
    <h3><a href="{{Route('employes.edit', ['employe' => $employe['id']])}}">Update</a></h3>

<form method="post" action="{{Route('employes.destroy', ['employe' => $employe['id']])}}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
    <button type="submit">Delete</button>
</form>

</div>


@endsection
