@extends('layout')
@section('content')
<h1>Your are inside forms</h1>

    <h3>{{$Contact_Person['name']}}</h3>
    <p>{{$Contact_Person['msg']}}</p>
    <p>{{$Contact_Person['mobile']}}</p>

@endsection
