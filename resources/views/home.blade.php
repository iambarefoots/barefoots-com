@extends('layout/main')
@section('title','Home')
@section('container')
<div style="font-family: Raleway;" class="container text-center">
<br><br><br><br><br>
<h1>Hello, Welcome {{Auth::user()->name}} !</h1>
<br>
@foreach ($a as $item)
<h5>Phone : {{$item->phone}}</h5>
<h5>Address : {{$item->address}}</h5>
@endforeach
</div>
<br>
<div class="container text-center">
    <button style="border-radius: 25px;" type="button" class="btn btn-info btn-lg">
    <a style="text-decoration: none;font-family: Raleway;" class="text-white" href="/">BACK TO HOME</a>
    </button>
</div>
@endsection