@extends('layout')
@section('content')
<h1>Your are inside forms</h1>

@if (count($employes)>0)
  @foreach ($employes as $employe)
    <h3><a href="">{{$employe['name']}}</a></h3>
    <h3>{{$employe['fname']}}</h3>
    <p>{{$employe['mobile']}}</p>
  @endforeach
@else
    <h2>erroe</h2>
@endif
@endsection
