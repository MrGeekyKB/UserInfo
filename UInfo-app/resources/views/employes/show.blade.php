@extends('layout')
@section('content')
<div class="" style=" margin: auto; margin-top: 150px;background-color: rgb(255, 255, 255); box-shadow: 10px 10px 50px gray; width: 50%; padding: 15px">
    <p>Name: {{$employe['fname']}}</p>
    <p>Contact: {{$employe['mobile']}}</p>
    <p>Birf: {{$employe['birf']}}</p>
    <h3><a href="{{ route('employes.edit', ['employe' => $employe['id']])}}">Update</a></h3>
</div>


@endsection
