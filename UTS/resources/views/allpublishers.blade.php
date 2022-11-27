@include('header')

@extends('template')

@section('cont')
<div style="display:flex; justify-content:center; align-items: center; background-color:white; padding-left:70px">
 
    @foreach ($publisher_data as $publisher)
    <div class="card" style="width: 250px; height:550px ; margin-right:50px; margin-top: 50px">
        <img src={{url('storage/'.$publisher->image)}} class="card-img-top" alt="..." style="width: 240px; height: 370px">
        <div class="card-body">
            <a style="text-decoration:none; font-weight:bolder; color:rgb(44, 44, 44); font-size:17px">
                {{$publisher->name}}
            </a>
            <p class="card-title">{{$publisher->address}}</p>
            <a href="/publisher/{{$publisher->id}}" class="btn btn-dark" role="button">Details</a>
        </div>
        </div>
    @endforeach    
</div>
@endsection